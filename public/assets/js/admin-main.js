"use strict";

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(function ($) {

  // sidebar search start
  $(".sidebar-search").on('input', function () {
    let term = $(this).val().toLowerCase();

    if (term.length > 0) {
      $(".sidebar ul li.nav-item").each(function (i) {
        let menuName = $(this).find("p").text().toLowerCase();
        let $mainMenu = $(this);

        // if any main menu is matched
        if (menuName.indexOf(term) > -1) {
          $mainMenu.removeClass('d-none');
          $mainMenu.addClass('d-block');
        } else {
          let matched = 0;
          let count = 0;
          // search sub-items of the current main menu (which is not matched)
          $mainMenu.find('span.sub-item').each(function (i) {
            // if any sub-item is matched of the current main menu, set the flag
            if ($(this).text().toLowerCase().indexOf(term) > -1) {
              count++;
              matched = 1;
            }
          });

          // if any sub-item is matched  of the current main menu (which is not matched)
          if (matched == 1) {
            $mainMenu.removeClass('d-none');
            $mainMenu.addClass('d-block');
          } else {
            $mainMenu.removeClass('d-block');
            $mainMenu.addClass('d-none');
          }
        }
      });
    } else {
      $(".sidebar ul li.nav-item").addClass('d-block');
    }
  });
  // sidebar search end


  // disabling default behave of form submits start
  $("#ajaxEditForm").attr('onsubmit', 'return false');
  $("#ajaxForm").attr('onsubmit', 'return false');
  // disabling default behave of form submits end


  // bootstrap datepicker & jQuery timepicker init start
  $('.datepicker').datepicker({
    autoclose: true
  });

  $('.timepicker').timepicker();
  // bootstrap datepicker & jQuery timepicker init end


  // fontawesome icon picker start
  $('.icp-dd').iconpicker();
  // fontawesome icon picker end


  // summernote initialization start
  $(".summernote").each(function (i) {
    let textareaHeight;
    let $summernote = $(this);

    if ($(this).data('height')) {
      textareaHeight = $(this).data('height');
    } else {
      textareaHeight = 200;
    }

    $('.summernote').eq(i).summernote({
      height: textareaHeight,
      dialogsInBody: true,
      dialogsFade: false,
      inheritPlaceholder: true,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['height', ['height']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'image', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
      popover: {
        image: [
          ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
          ['float', ['floatLeft', 'floatRight', 'floatNone']],
          ['remove', ['removeMedia']]
        ],
        link: [
          ['link', ['linkDialogShow', 'unlink']]
        ],
        table: [
          ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
          ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
        ],
        air: [
          ['color', ['color']],
          ['font', ['bold', 'underline', 'clear']],
          ['para', ['ul', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture']]
        ]
      },
      callbacks: {
        onImageUpload: function (files) {
          $('.request-loader').addClass('show');

          let imgUploadURL = baseUrl + '/admin/summernote/upload-image';

          let fd = new FormData();
          fd.append('image', files[0]);

          $.ajax({
            url: imgUploadURL,
            method: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
              $summernote.summernote('insertImage', data);
              $('.request-loader').removeClass('show');
            }
          });
        },
        onMediaDelete: function (target) {
          let imgRemoveURL = baseUrl + '/admin/summernote/remove-image';

          let imageInfo = target[0].src;
          let imageInfoArray = imageInfo.split('/');
          let imageName = imageInfoArray.pop();

          let fd = new FormData();
          fd.append('image', imageName);

          $.ajax({
            url: imgRemoveURL,
            method: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function (response) {
              alert(response.data);
            }
          });
        }
      }
    });
  });


  $(document).on('click', ".note-video-btn", function () {
    let i = $(this).index();

    if ($(".summernote").eq(i).parents(".modal").length > 0) {
      setTimeout(() => {
        $("body").addClass('modal-open');
      }, 500);
    }
  });
  // summernote initialization end


  // bootstrap notify start
  function bootnotify(message, title, type) {
    var content = {};

    content.message = message;
    content.title = title;
    content.icon = 'fa fa-bell';

    $.notify(content, {
      type: type,
      placement: {
        from: 'top',
        align: 'right'
      },
      showProgressbar: true,
      time: 1000,
      allow_dismiss: true,
      delay: 4000
    });
  }
  // bootstrap notify end


  // Form Submit with AJAX Request Start
  $("#submitBtn").on('click', function (e) {
    $(e.target).attr('disabled', true);
    $(".request-loader").addClass("show");

    if ($(".iconpicker-component").length > 0) {
      $("#inputIcon").val($(".iconpicker-component").find('i').attr('class'));
    }

    let ajaxForm = document.getElementById('ajaxForm');
    let fd = new FormData(ajaxForm);
    let url = $("#ajaxForm").attr('action');
    let method = $("#ajaxForm").attr('method');

    if ($("#ajaxForm .summernote").length > 0) {
      $("#ajaxForm .summernote").each(function (i) {
        let content = $(this).summernote('code');

        fd.delete($(this).attr('name'));
        fd.append($(this).attr('name'), content);
      });
    }

    $.ajax({
      url: url,
      method: method,
      data: fd,
      contentType: false,
      processData: false,
      success: function (data) {
        $(e.target).attr('disabled', false);
        $('.request-loader').removeClass('show');

        $('.em').each(function () {
          $(this).html('');
        });

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (error) {
        $('.em').each(function () {
          $(this).html('');
        });

        for (let x in error.responseJSON.errors) {
          document.getElementById('err_' + x).innerHTML = error.responseJSON.errors[x][0];
        }

        $('.request-loader').removeClass('show');
        $(e.target).attr('disabled', false);
      }
    });
  });
  // Form Submit with AJAX Request End


  // Form Prepopulate After Clicking Edit Button Start
  $(".editBtn").on('click', function () {
    let datas = $(this).data();
    delete datas['toggle'];

    for (let x in datas) {
      if ($("#in_" + x).hasClass('summernote')) {
        $("#in_" + x).summernote('code', datas[x]);
      } else if ($("#in_" + x).data('role') == 'tagsinput') {
        if (datas[x].length > 0) {
          let arr = datas[x].split(" ");
          for (let i = 0; i < arr.length; i++) {
            $("#in_" + x).tagsinput('add', arr[i]);
          }
        } else {
          $("#in_" + x).tagsinput('removeAll');
        }
      } else if ($("#in_" + x).hasClass('select2')) {
        $("#in_" + x).val(datas[x]);
        $("#in_" + x).trigger('change');
      } else if ($("input[name='" + x + "']").attr('type') == 'radio') {
        $("input[name='" + x + "']").each(function (i) {
          if ($(this).val() == datas[x]) {
            $(this).prop('checked', true);
          }
        });
      } else {
        $("#in_" + x).val(datas[x]);

        if ($('.in_image').length > 0) {
          $('.in_image').attr('src', datas['image']);
        }

        if ($('#in_icon').length > 0) {
          $('#in_icon').attr('class', datas['icon']);
        }
      }
    }


    if ('edit' in datas && datas.edit === 'editAdvertisement') {
      if (datas.ad_type === 'banner') {
        if (!$('#edit-slot-input').hasClass('d-none')) {
          $('#edit-slot-input').addClass('d-none');
        }

        $('#edit-image-input').removeClass('d-none');
        $('#edit-url-input').removeClass('d-none');
      } else {
        if (!$('#edit-image-input').hasClass('d-none') && !$('#edit-url-input').hasClass('d-none')) {
          $('#edit-image-input').addClass('d-none');
          $('#edit-url-input').addClass('d-none');
        }

        $('#edit-slot-input').removeClass('d-none');
      }
    }


    // focus & blur colorpicker inputs
    setTimeout(() => {
      $(".jscolor").each(function () {
        $(this).focus();
        $(this).blur();
      });
    }, 300);
  });
  // Form Prepopulate After Clicking Edit Button End


  // Form Update with AJAX Request Start
  $("#updateBtn").on('click', function (e) {
    $(".request-loader").addClass("show");

    if ($(".edit-iconpicker-component").length > 0) {
      $("#editInputIcon").val($(".edit-iconpicker-component").find('i').attr('class'));
    }

    let ajaxEditForm = document.getElementById('ajaxEditForm');
    let fd = new FormData(ajaxEditForm);
    let url = $("#ajaxEditForm").attr('action');
    let method = $("#ajaxEditForm").attr('method');

    if ($("#ajaxEditForm .summernote").length > 0) {
      $("#ajaxEditForm .summernote").each(function (i) {
        let content = $(this).summernote('code');
        fd.delete($(this).attr('name'));
        fd.append($(this).attr('name'), content);
      })
    }

    $.ajax({
      url: url,
      method: method,
      data: fd,
      contentType: false,
      processData: false,
      success: function (data) {
        $('.request-loader').removeClass('show');
        $(e.target).attr('disabled', false);

        $('.em').each(function () {
          $(this).html('');
        });

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (error) {
        $('.em').each(function () {
          $(this).html('');
        });

        for (let x in error.responseJSON.errors) {
          document.getElementById('editErr_' + x).innerHTML = error.responseJSON.errors[x][0];
        }

        $('.request-loader').removeClass('show');
        $(e.target).attr('disabled', false);
      }
    });
  });
  // Form Update with AJAX Request End


  // Delete Using AJAX Request Start
  $('.deleteBtn').on('click', function (e) {
    e.preventDefault();
    $(".request-loader").addClass("show");

    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      buttons: {
        confirm: {
          text: 'Yes, delete it',
          className: 'btn btn-success'
        },
        cancel: {
          visible: true,
          className: 'btn btn-danger'
        }
      }
    }).then((Delete) => {
      if (Delete) {
        $(this).parent(".deleteForm").submit();
      } else {
        swal.close();
        $(".request-loader").removeClass("show");
      }
    });
  });
  // Delete Using AJAX Request End


  // Bulk Delete Using AJAX Request Start
  $(".bulk-check").on('change', function () {
    let val = $(this).data('val');
    let checked = $(this).prop('checked');

    // if selected checkbox is 'all' then check all the checkboxes
    if (val == 'all') {
      if (checked) {
        $(".bulk-check").each(function () {
          $(this).prop('checked', true);
        });
      } else {
        $(".bulk-check").each(function () {
          $(this).prop('checked', false);
        });
      }
    }

    // if any checkbox is checked then flag = 1, otherwise flag = 0
    let flag = 0;

    $(".bulk-check").each(function () {
      let status = $(this).prop('checked');

      if (status) {
        flag = 1;
      }
    });

    // if any checkbox is checked then show the delete button
    if (flag == 1) {
      $(".bulk-delete").addClass('d-inline-block');
      $(".bulk-delete").removeClass('d-none');
    } else {
      // if no checkbox is checked then hide the delete button
      $(".bulk-delete").removeClass('d-inline-block');
      $(".bulk-delete").addClass('d-none');
    }
  });

  $('.bulk-delete').on('click', function () {
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this",
      type: 'warning',
      buttons: {
        confirm: {
          text: 'Yes, delete it',
          className: 'btn btn-success'
        },
        cancel: {
          visible: true,
          className: 'btn btn-danger'
        }
      }
    }).then((Delete) => {
      if (Delete) {
        $(".request-loader").addClass('show');
        let href = $(this).data('href');
        let ids = [];

        // take ids of checked one's
        $(".bulk-check:checked").each(function () {
          if ($(this).data('val') != 'all') {
            ids.push($(this).data('val'));
          }
        });

        let fd = new FormData();
        for (let i = 0; i < ids.length; i++) {
          fd.append('ids[]', ids[i]);
        }

        $.ajax({
          url: href,
          method: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          success: function (data) {
            $(".request-loader").removeClass('show');

            if (data.status == "success") {
              location.reload();
            }
          }
        });
      } else {
        swal.close();
      }
    });
  });
  // Bulk Delete Using AJAX Request End


  // DataTable Start
  $('#basic-datatables').DataTable({
    ordering: false,
    responsive: true
  });
  // DataTable End


  // Uploaded Image Preview Start
  $('.img-input').on('change', function (event) {
    let file = event.target.files[0];
    let reader = new FileReader();

    reader.onload = function (e) {
      $('.uploaded-img').attr('src', e.target.result);
    };

    reader.readAsDataURL(file);
  });
  // Uploaded Image Preview End


  // Uploaded Background Image Preview Start
  $('.background-img-input').on('change', function (event) {
    let file = event.target.files[0];
    let reader = new FileReader();

    reader.onload = function (e) {
      $('.uploaded-background-img').attr('src', e.target.result);
    };

    reader.readAsDataURL(file);
  });
  // Uploaded Background Image Preview End


  // Change Input Direction Start
  $('select[name="language_id"]').on('change', function () {
    $('.request-loader').addClass('show');

    let rtlURL = baseUrl + "/admin/language-management/" + $(this).val() + "/check-rtl";

    // send ajax request to check whether the selected language is 'rtl' or not
    $.get(rtlURL, function (response) {
      $('.request-loader').removeClass('show');

      if ('successData' in response) {
        if (response.successData == 1) {
          $('form.create input').each(function () {
            if (!$(this).hasClass('ltr')) {
              $(this).addClass('rtl');
            }
          });

          $('form.create select').each(function () {
            if (!$(this).hasClass('ltr')) {
              $(this).addClass('rtl');
            }
          });

          $('form.create textarea').each(function () {
            if (!$(this).hasClass('ltr')) {
              $(this).addClass('rtl');
            }
          });

          $('form.create .note-editor.note-frame .note-editing-area .note-editable').each(function () {
            if (!$(this).hasClass('ltr')) {
              $(this).addClass('rtl');
            }
          });
        } else {
          $('form.create input, form.create select, form.create textarea, form.create .note-editor.note-frame .note-editing-area .note-editable').removeClass('rtl');
        }
      } else {
        alert(response.errorData);
      }
    });
  });
  // Change Input Direction End


  // Form Prepopulate After Click The Edit Button(Lesson) Start
  $('.lessonEditBtn').on('click', function (event) {
    event.preventDefault();

    let datas = $(this).data();

    for (const key in datas) {
      $('#lesson_' + key).val(datas[key]);
    }

    $('#viewLessonModal-' + datas.module_id).modal('hide');
    $('#lessonEditModal').modal('show');
  });
  // Form Prepopulate After Click The Edit Button(Lesson) End


  // Lesson Update with AJAX Request Start
  $('#lessonUpdateBtn').on('click', function () {
    $('.request-loader').addClass('show');

    let form = $('#lessonEditForm')[0];
    let fd = new FormData(form);
    let url = $('#lessonEditForm').attr('action');
    let type = $('#lessonEditForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').each(function () {
          $(this).html('');
        });

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (error) {
        $('.em').each(function () {
          $(this).html('');
        });

        for (let x in error.responseJSON.errors) {
          $('#lessonEdit_error_' + x).text(error.responseJSON.errors[x][0]);
        }

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Lesson Update with AJAX Request End


  // Lesson Delete Using AJAX Request Start
  $('.lessonDeleteBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');
    let $this = $(this);

    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      buttons: {
        confirm: {
          text: 'Yes, delete it',
          className: 'btn btn-success'
        },
        cancel: {
          visible: true,
          className: 'btn btn-danger'
        }
      }
    }).then((Delete) => {
      if (Delete) {
        $this.parents('.lessonDeleteForm').submit();
      } else {
        swal.close();
        $('.request-loader').removeClass('show');
      }
    });
  });
  // Lesson Delete Using AJAX Request End


  // Store Lesson's Video Using AJAX Request Start
  $('#videoSubmitBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let videoForm = $('#videoForm')[0];
    let fd = new FormData(videoForm);
    let url = $('#videoForm').attr('action');
    let type = $('#videoForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').each(function () {
          $(this).html('');
        });

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').each(function () {
          $(this).html('');
        });

        for (let x in errRes.responseJSON.errors) {
          $('#err_' + x).text(errRes.responseJSON.errors[x][0]);
        }

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Store Lesson's Video Using AJAX Request End


  // Store Lesson's File Using AJAX Request Start
  $('#fileSubmitBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let fileForm = $('#fileForm')[0];
    let fd = new FormData(fileForm);
    let url = $('#fileForm').attr('action');
    let type = $('#fileForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').each(function () {
          $(this).html('');
        });

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').each(function () {
          $(this).html('');
        });

        for (let x in errRes.responseJSON.errors) {
          $('#err_' + x).text(errRes.responseJSON.errors[x][0]);
        }

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Store Lesson's File Using AJAX Request End


  // Store Lesson's Text Using AJAX Request Start
  $('#textSubmitBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let textForm = $('#textForm')[0];
    let fd = new FormData(textForm);
    let url = $('#textForm').attr('action');
    let type = $('#textForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').html('');

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').html('');

        $('#err_text').text(errRes.responseJSON.error['text'][0]);

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Store Lesson's Text Using AJAX Request End


  // Update Lesson's Text Using AJAX Request Start
  $('#textUpdateBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let textForm = $('#editTextForm')[0];
    let fd = new FormData(textForm);
    let url = $('#editTextForm').attr('action');
    let type = $('#editTextForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').html('');

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').html('');

        $('#editErr_text').text(errRes.responseJSON.error['text'][0]);

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Update Lesson's Text Using AJAX Request End


  // Store Lesson's Code Using AJAX Request Start
  $('#codeSubmitBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let codeForm = $('#codeForm')[0];
    let fd = new FormData(codeForm);
    let url = $('#codeForm').attr('action');
    let type = $('#codeForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').html('');

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').html('');

        $('#err_code').text(errRes.responseJSON.error['code'][0]);

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Store Lesson's Code Using AJAX Request End


  // Update Lesson's Code Using AJAX Request Start
  $('#codeUpdateBtn').on('click', function (event) {
    event.preventDefault();
    $('.request-loader').addClass('show');

    let codeForm = $('#editCodeForm')[0];
    let fd = new FormData(codeForm);
    let url = $('#editCodeForm').attr('action');
    let type = $('#editCodeForm').attr('method');

    $.ajax({
      url: url,
      type: type,
      data: fd,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (data) {
        $('.request-loader').removeClass('show');

        $('.em').html('');

        if (data.status == 'success') {
          location.reload();
        }
      },
      error: function (errRes) {
        $('.em').html('');

        $('#editErr_code').text(errRes.responseJSON.error['code'][0]);

        $('.request-loader').removeClass('show');
      }
    });
  });
  // Update Lesson's Code Using AJAX Request End

  // select2
  if ($('.select2').length > 0) {
    $('.select2').select2();
  }

  /*------------------------
   Highlight Js
  -------------------------- */
  hljs.initHighlightingOnLoad();
});

function cloneInput(fromId, toId, event) {
  let $target = $(event.target);

  if ($target.is(':checked')) {
    $('#' + fromId + ' .form-control').each(function (i) {
      let index = i;
      let val = $(this).val();
      let $toInput = $('#' + toId + ' .form-control').eq(index);

      if ($(this).hasClass('summernote')) {
        $toInput.summernote('code', val);
      } else if ($(this).data('role') == 'tagsinput') {
        if (val.length > 0) {
          let tags = val.split(',');
          tags.forEach(tag => {
            $toInput.tagsinput('add', tag);
          });
        } else {
          $toInput.tagsinput('removeAll');
        }
      } else {
        $toInput.val(val);
      }
    });
  } else {
    $('#' + toId + ' .form-control').each(function (i) {
      let $toInput = $('#' + toId + ' .form-control').eq(i);

      if ($(this).hasClass('summernote')) {
        $toInput.summernote('code', '');
      } else if ($(this).data('role') == 'tagsinput') {
        $toInput.tagsinput('removeAll');
      } else {
        $toInput.val('');
      }
    });
  }
}

function storeLesson(event, moduleId) {
  event.preventDefault();
  $('.request-loader').addClass('show');

  let lessonForm = $('#lessonForm-' + moduleId)[0];
  let fd = new FormData(lessonForm);
  let url = $('#lessonForm-' + moduleId).attr('action');
  let type = $('#lessonForm-' + moduleId).attr('method');

  $.ajax({
    url: url,
    type: type,
    data: fd,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function (data) {
      $('.request-loader').removeClass('show');

      $('.em').each(function () {
        $(this).html('');
      });

      if (data.status == 'success') {
        location.reload();
      }
    },
    error: function (error) {
      $('.em').each(function () {
        $(this).html('');
      });

      for (let x in error.responseJSON.errors) {
        $('#err_' + x + '-' + moduleId).text(error.responseJSON.errors[x][0]);
      }

      $('.request-loader').removeClass('show');
    }
  });
}
