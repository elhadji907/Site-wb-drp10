((Drupal, once) => {
  Drupal.behaviors.ginTableHeader = {
    attach: (context) => {
      Drupal.ginTableHeader.init(context);
    },
  };

  Drupal.ginTableHeader = {
    init: function (context) {
      once('ginTableHeader', '.sticky-enabled', context).forEach(el => {
        // Watch sticky table header.
        const observer = new IntersectionObserver(
          ([e]) => {
            context.querySelector('.gin-table-scroll-wrapper').classList.toggle('--is-sticky', e.intersectionRatio < 1 || window.scrollY > context.querySelector('.gin-table-scroll-wrapper').offsetTop);
          },
          { threshold: [1], rootMargin: `-${this.stickyPosition()}px 0px 0px 0px` }
        );
        observer.observe(el.querySelector('thead'));

        // Create sticky element.
        this.createStickyHeader(el);

        // SelectAll handling.
        this.syncSelectAll();

        // Watch resize event.
        window.onresize = () => {
          Drupal.debounce(this.handleResize(el), 150);
        };
      });
    },
    stickyPosition: () => {
      let offsetTop = 0;
      if (!document.body.classList.contains('gin--classic-toolbar')) {
        offsetTop = document.querySelector('#gin-toolbar-bar').clientHeight + document.querySelector('.region-sticky').clientHeight;
      } else {
        offsetTop = document.querySelector('#toolbar-bar').clientHeight;
      }

      return offsetTop;
    },
    createStickyHeader: function createStickyHeader(table) {
      const header = table.querySelector(':scope > thead');
      const stickyTable = document.createElement('table');
      stickyTable.className = 'sticky-header';
      stickyTable.append(header.cloneNode(true));
      table.insertBefore(stickyTable, header);
      this.handleResize(table);
    },
    syncSelectAll: () => {
      document.querySelectorAll('table.sticky-header th.select-all').forEach(tableHeaderSticky => {
        const table = tableHeaderSticky.closest('table');
        table.querySelectorAll(':scope th.select-all').forEach(tableHeader => {
          tableHeader.addEventListener('click', event => {
            if (event.target.matches('input[type="checkbox"]')) {
              table.nextSibling.querySelectorAll('th.select-all').forEach(siblingTableHeader => {
                siblingTableHeader.childNodes[0].click();
              });
            }
          });
        });
      });
    },
    handleResize: (table) => {
      const header = table.querySelector(':scope > thead');
      header.querySelectorAll('th').forEach((el, i) => {
        table.querySelector(`table.sticky-header > thead th:nth-of-type(${i+1})`).style.width = `${el.offsetWidth}px`;
      });
    },
  };

})(Drupal, once);
;
/**
 * @file
 * Responsive table functionality.
 */

(function ($, Drupal, window) {
  /**
   * The TableResponsive object optimizes table presentation for screen size.
   *
   * A responsive table hides columns at small screen sizes, leaving the most
   * important columns visible to the end user. Users should not be prevented
   * from accessing all columns, however. This class adds a toggle to a table
   * with hidden columns that exposes the columns. Exposing the columns will
   * likely break layouts, but it provides the user with a means to access
   * data, which is a guiding principle of responsive design.
   *
   * @constructor Drupal.TableResponsive
   *
   * @param {HTMLElement} table
   *   The table element to initialize the responsive table on.
   */
  function TableResponsive(table) {
    this.table = table;
    this.$table = $(table);
    this.showText = Drupal.t('Show all columns');
    this.hideText = Drupal.t('Hide lower priority columns');
    // Store a reference to the header elements of the table so that the DOM is
    // traversed only once to find them.
    this.$headers = this.$table.find('th');
    // Add a link before the table for users to show or hide weight columns.
    this.$link = $(
      '<button type="button" class="link tableresponsive-toggle"></button>',
    )
      .attr(
        'title',
        Drupal.t(
          'Show table cells that were hidden to make the table fit within a small screen.',
        ),
      )
      .on('click', $.proxy(this, 'eventhandlerToggleColumns'));

    this.$table.before(
      $('<div class="tableresponsive-toggle-columns"></div>').append(
        this.$link,
      ),
    );

    // Attach a resize handler to the window.
    $(window)
      .on(
        'resize.tableresponsive',
        $.proxy(this, 'eventhandlerEvaluateColumnVisibility'),
      )
      .trigger('resize.tableresponsive');
  }

  /**
   * Attach the tableResponsive function to {@link Drupal.behaviors}.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches tableResponsive functionality.
   */
  Drupal.behaviors.tableResponsive = {
    attach(context, settings) {
      once('tableresponsive', 'table.responsive-enabled', context).forEach(
        (table) => {
          TableResponsive.tables.push(new TableResponsive(table));
        },
      );
    },
  };

  /**
   * Extend the TableResponsive function with a list of managed tables.
   */
  $.extend(
    TableResponsive,
    /** @lends Drupal.TableResponsive */ {
      /**
       * Store all created instances.
       *
       * @type {Array.<Drupal.TableResponsive>}
       */
      tables: [],
    },
  );

  /**
   * Associates an action link with the table that will show hidden columns.
   *
   * Columns are assumed to be hidden if their header has the class priority-low
   * or priority-medium.
   */
  $.extend(
    TableResponsive.prototype,
    /** @lends Drupal.TableResponsive# */ {
      /**
       * @param {jQuery.Event} e
       *   The event triggered.
       */
      eventhandlerEvaluateColumnVisibility(e) {
        const pegged = parseInt(this.$link.data('pegged'), 10);
        const hiddenLength = this.$headers.filter(
          '.priority-medium:hidden, .priority-low:hidden',
        ).length;
        // If the table has hidden columns, associate an action link with the
        // table to show the columns.
        if (hiddenLength > 0) {
          this.$link.show();
          this.$link[0].textContent = this.showText;
        }
        // When the toggle is pegged, its presence is maintained because the user
        // has interacted with it. This is necessary to keep the link visible if
        // the user adjusts screen size and changes the visibility of columns.
        if (!pegged && hiddenLength === 0) {
          this.$link.hide();
          this.$link[0].textContent = this.hideText;
        }
      },

      /**
       * Toggle the visibility of columns based on their priority.
       *
       * Columns are classed with either 'priority-low' or 'priority-medium'.
       *
       * @param {jQuery.Event} e
       *   The event triggered.
       */
      eventhandlerToggleColumns(e) {
        e.preventDefault();
        const self = this;
        const $hiddenHeaders = this.$headers.filter(
          '.priority-medium:hidden, .priority-low:hidden',
        );
        this.$revealedCells = this.$revealedCells || $();
        // Reveal hidden columns.
        if ($hiddenHeaders.length > 0) {
          $hiddenHeaders.each(function (index, element) {
            const $header = $(this);
            const position = $header.prevAll('th').length;
            self.$table.find('tbody tr').each(function () {
              const $cells = $(this).find('td').eq(position);
              $cells.show();
              // Keep track of the revealed cells, so they can be hidden later.
              self.$revealedCells = $().add(self.$revealedCells).add($cells);
            });
            $header.show();
            // Keep track of the revealed headers, so they can be hidden later.
            self.$revealedCells = $().add(self.$revealedCells).add($header);
          });
          this.$link[0].textContent = this.hideText;
          this.$link.data('pegged', 1);
        }
        // Hide revealed columns.
        else {
          this.$revealedCells.hide();
          // Strip the 'display:none' declaration from the style attributes of
          // the table cells that .hide() added.
          this.$revealedCells.each(function (index, element) {
            const $cell = $(this);
            const properties = $cell.attr('style').split(';');
            const newProps = [];
            // The hide method adds display none to the element. The element
            // should be returned to the same state it was in before the columns
            // were revealed, so it is necessary to remove the display none value
            // from the style attribute.
            const match = /^display\s*:\s*none$/;
            for (let i = 0; i < properties.length; i++) {
              const prop = properties[i];
              prop.trim();
              // Find the display:none property and remove it.
              const isDisplayNone = match.exec(prop);
              if (isDisplayNone) {
                continue;
              }
              newProps.push(prop);
            }
            // Return the rest of the style attribute values to the element.
            $cell.attr('style', newProps.join(';'));
          });
          this.$link[0].textContent = this.showText;
          this.$link.data('pegged', 0);
          // Refresh the toggle link.
          $(window).trigger('resize.tableresponsive');
        }
      },
    },
  );

  // Make the TableResponsive object available in the Drupal namespace.
  Drupal.TableResponsive = TableResponsive;
})(jQuery, Drupal, window);
;
/**
 * @file
 * Defines checkbox theme functions.
 */

((Drupal) => {
  /**
   * Theme function for a checkbox.
   *
   * @return {string}
   *   The HTML markup for the checkbox.
   */
  Drupal.theme.checkbox = () =>
    `<input type="checkbox" class="form-checkbox"/>`;
})(Drupal);
;
/**
 * @file
 * Theme override for checkbox.
 */

((Drupal) => {
  /**
   * Constructs a checkbox input element.
   *
   * @return {string}
   *   A string representing a DOM fragment.
   */
  Drupal.theme.checkbox = () =>
    '<input type="checkbox" class="form-checkbox form-boolean form-boolean--type-checkbox"/>';
})(Drupal);
;
((Drupal, once) => {
  Drupal.behaviors.tableSelect = {
    attach: (context) => {
      once('tableSelect', 'th.select-all', context).forEach((el) => {
        if (el.closest('table')) {
          Drupal.tableSelect(el.closest('table'));
        }
      });
    },
  };

  Drupal.tableSelect = (table) => {
    if (table.querySelector('td input[type="checkbox"]') === null) {
      return;
    }

    let checkboxes = 0;
    let lastChecked = 0;
    const strings = {
      selectAll: Drupal.t('Select all rows in this table'),
      selectNone: Drupal.t('Deselect all rows in this table')
    };
    const updateSelectAll = (state) => {
      table
        .querySelectorAll('th.select-all input[type="checkbox"]')
        .forEach(checkbox => {
          const stateChanged = checkbox.checked !== state;
          checkbox.setAttribute(
            'title',
            state ? strings.selectNone : strings.selectAll
          );

          if (stateChanged) {
            checkbox.checked = state;
            checkbox.dispatchEvent(new Event('change'));
          }
        });
    };

    const setClass = 'is-sticky';
    const stickyHeader = table
      .closest('form')
      .querySelector('[data-drupal-selector*="edit-header"]');

    const updateSticky = (state) => {
      if (state === true) {
        stickyHeader.classList.add(setClass);
      }
      else {
        stickyHeader.classList.remove(setClass);
      }
    };

    const checkedCheckboxes = (checkboxes) => {
      const checkedCheckboxes = Array.from(checkboxes).filter(checkbox => checkbox.matches(':checked'));
      updateSelectAll(checkboxes.length === checkedCheckboxes.length);
      updateSticky(!!checkedCheckboxes.length);
    };

    table.querySelectorAll('th.select-all').forEach(el => {
      el.innerHTML = Drupal.theme('checkbox') + el.innerHTML;
      el.querySelector('.form-checkbox').setAttribute('title', strings.selectAll);
      el.addEventListener('click', event => {
        if (event.target.matches('input[type="checkbox"]')) {
          checkboxes.forEach(checkbox => {
            const stateChanged = checkbox.checked !== event.target.checked;

            if (stateChanged) {
              checkbox.checked = event.target.checked;
              checkbox.dispatchEvent(new Event('change'));
            }

            checkbox.closest('tr').classList.toggle('selected', checkbox.checked);
          });

          updateSelectAll(event.target.checked);
          updateSticky(event.target.checked);
        }
      });
    });

    checkboxes = table.querySelectorAll('td input[type="checkbox"]:enabled');
    checkboxes.forEach(el => {
      el.addEventListener('click', e => {
        e.target
          .closest('tr')
          .classList.toggle('selected', this.checked);

        if (e.shiftKey && lastChecked && lastChecked !== e.target) {
          Drupal.tableSelectRange(
            e.target.closest('tr'),
            lastChecked.closest('tr'),
            e.target.checked
          );
        }

        checkedCheckboxes(checkboxes);
        lastChecked = e.target;
      });
    });

    checkedCheckboxes(checkboxes);
  };

  Drupal.tableSelectRange = function (from, to, state) {
    const mode = from.rowIndex > to.rowIndex ? 'previousSibling' : 'nextSibling';

    for (let i = from[mode]; i; i = i[mode]) {
      if (i.nodeType !== 1) {
        continue;
      }

      i.classList.toggle('selected', state);
      i.querySelector('input[type="checkbox"]').checked = state;

      if (to.nodeType) {
        if (i === to) {
          break;
        }
      } else if ([i].filter(y => y === to).length) {
        break;
      }
    }
  };

})(Drupal, once);
;
