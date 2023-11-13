'use strict';

$(document).ready(function () {

  if (sessionStorage.getItem('course_id')) {
    let id = parseInt(sessionStorage.getItem('course_id'));

    if (courseId === id) {
      if (sessionStorage.getItem('new_price')) {
        $('#discount-price').text(parseFloat(sessionStorage.getItem('new_price')).toFixed(2));
        $('#discount-info').removeClass('d-none');
      }
    }
  }

  $('select[name="gateway"]').on('change', function () {
    let value = $(this).val();
    let dataType = parseInt(value);

    if (isNaN(dataType)) {
      if ($('.offline-gateway-info').hasClass('d-block')) {
        $('.offline-gateway-info').removeClass('d-block');
      }

      // hide offline gateway informations
      $('.offline-gateway-info').addClass('d-none');

      // show or hide stripe card inputs
      if (value == 'stripe') {
        $('#stripe-card-input').removeClass('d-none');
      } else {
        $('#stripe-card-input').addClass('d-none');
      }
    } else {
      // hide stripe gateway card inputs
      if (!$('#stripe-card-input').hasClass('d-none')) {
        $('#stripe-card-input').addClass('d-none');
      }

      // hide offline gateway informations
      $('.offline-gateway-info').addClass('d-none');

      // show particular offline gateway informations
      $('#offline-gateway-' + value).removeClass('d-none');
    }
  });

  // get discount amount & apply the coupon by clicking on 'Apply' button
  $('#coupon-btn').on('click', function (event) {
    event.preventDefault();

    let code = $('#coupon-code').val();

    if (code) {
      applyCoupon(code, courseId);
    } else {
      alert('Please enter your coupon code.');
    }
  });

  $('#coupon-code').on('keypress', function (event) {
    if (event.which == 13) {
      event.preventDefault();
      
      let code = $(this).val();

      if (code) {
        applyCoupon(code, courseId);
      } else {
        alert('Please enter your coupon code.');
      }
    }
  });

  // get the rating (star) value in integer
  $('.review-value span').on('click', function () {
    let ratingValue = $(this).attr('data-ratingVal');

    // first, remove star color from all the 'review-value' class
    $('.review-value span').css('color', '');

    // second, add star color to the selected parent class
    let parentClass = 'review-' + ratingValue;
    $('.' + parentClass + ' span').css('color', '#FEA116');

    // finally, set the rating value to a hidden input field
    $('#rating-id').val(ratingValue);
  });
});

// validate the card number for stripe payment gateway
function checkCard(cardNumber) {
  let status = Stripe.card.validateCardNumber(cardNumber);

  if (status == false) {
    $('#card-error').html('Invalid card number!');
  } else {
    $('#card-error').html('');
  }
}

// validate the cvc number for stripe payment gateway
function checkCVC(cvcNumber) {
  let status = Stripe.card.validateCVC(cvcNumber);

  if (status == false) {
    $('#cvc-error').html('Invalid cvc number!');
  } else {
    $('#cvc-error').html('');
  }
}

function applyCoupon(couponCode, courseId) {
  const url = baseURL + '/course-enrolment/apply-coupon';

  let data = {
    coupon: couponCode,
    id: courseId,
    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  };

  $.post(url, data, function (response) {
    if ('success' in response) {
      let new_price = response.newPrice;
      sessionStorage.setItem('course_id', courseId);
      sessionStorage.setItem('new_price', new_price);

      $('#discount-price').text(new_price.toFixed(2));
      $('#discount-info').removeClass('d-none');
      $('#coupon-code').val('');

      toastr['success'](response.success);
    } else if ('error' in response) {
      toastr['error'](response.error);
    }
  });
}
