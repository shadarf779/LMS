$(document).ready(function () {
  'use strict';

  function clickSubmit() {
    $("#filtersForm input").each(function() {
      if ($(this).val().length == 0) {
        $(this).remove();
      }
    });
    $('#submitBtn').trigger('click');
  }

  // search course by pricing type
  $('input:radio[name="type"]').on('change', function () {
    let courseType = $('input:radio[name="type"]:checked').val();

    $('#type-id').val(courseType);
    clickSubmit();
  });

  // search course by category
  $('input:radio[name="category"]').on('change', function () {
    let categoryId = $('input:radio[name="category"]:checked').val();

    $('#category-id').val(categoryId);
    clickSubmit();
  });

  // course price range-slider
  $('#range-slider').slider({
    range: true,
    min: min_price,
    max: max_price,
    values: [curr_min, curr_max],
    slide: function (event, ui) {
      //while the slider moves, then this function will show that range value
      $('#amount').val((position == 'left' ? symbol + ' ' : '') + ui.values[0] + (position == 'right' ? ' ' + symbol : '') + ' - ' + (position == 'left' ? symbol + ' ' : '') + ui.values[1] + (position == 'right' ? ' ' + symbol : ''));
    }
  });

  // initially this is showing the price range value
  $('#amount').val((position == 'left' ? symbol + ' ' : '') + $('#range-slider').slider('values', 0) + (position == 'right' ? ' ' + symbol : '') + ' - ' + (position == 'left' ? symbol + ' ' : '') + $('#range-slider').slider('values', 1) + (position == 'right' ? ' ' + symbol : ''));

  // search course by filtering the price
  $('#range-slider').on('slidestop', function () {
    let filterPrice = $('#amount').val();

    filterPrice = filterPrice.split('-');
    let minCost = parseFloat(filterPrice[0].replace(symbol, ' '));
    let maxCost = parseFloat(filterPrice[1].replace(symbol, ' '));

    $('#min-id').val(minCost);
    $('#max-id').val(maxCost);
    clickSubmit();
  });

  // search course by title
  $('#search-input').on('keypress', function (e) {
    if (e.which == 13) {
      let value = $(this).val();

      if (value == '') {
        alert('Please enter something.');
      } else {
        $('#keyword-id').val(value);
        clickSubmit();
      }
    }
  });

  $('#course-search-icon').on('click', function () {
    let value = $('#search-input').val();

    if (value == '') {
      alert('Please enter something.');
    } else {
      $('#keyword-id').val(value);
      clickSubmit();
    }
  });

  // search course by sorting
  $('#sort-type').on('change', function () {
    let value = $(this).val();

    $('#sort-id').val(value);
    clickSubmit();
  });
});
