/*! @preserve
 * TableCheckAll.js
 * version: 1.0
 * author: Ronard Cauba <ronard@ecomnuggets.com>
 * license: MIT
 * https://codeanddeploy.com/blog/jquery-plugins/jquery-table-check-all-plugin
 */
$.fn.TableCheckAll = function (options) {
    // Default options
    var settings = $.extend({
      checkAllCheckboxClass: '.check-all',
      checkboxClass: '.check'
    }, options);
    return this.each(function () {
      $(this).find(settings.checkAllCheckboxClass).on('click', function () {
        if ($(this).is(':checked')) {
          $.each($(this).parents("table").find(settings.checkboxClass), function () {
            $(this).prop('checked', true);
          });
        } else {
          $.each($(this).parents("table").find(settings.checkboxClass), function () {
            $(this).prop('checked', false);
          });
        }
      });
      $(this).find(settings.checkboxClass).on('click', function () {
        var totalCheckbox = $(this).parents("table").find(settings.checkboxClass).length;
        var totalChecked = $(this).parents("table").find(settings.checkboxClass + ":checked").length;

        if (totalCheckbox == totalChecked) {
          if (!$(this).parents("table").find(settings.checkAllCheckboxClass).is(':checked')) {
            $(this).parents("table").find(settings.checkAllCheckboxClass).prop('checked', true);
          }
        }

        if (totalCheckbox != totalChecked && !$(this).is(':checked')) {
          $(this).parents("table").find(settings.checkAllCheckboxClass).prop('checked', false);
        }
      });
    });
  };
