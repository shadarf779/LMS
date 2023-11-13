'use strict';
$(document).ready(function () {

  let i = 0;
  let rightAnsCount = 0;

  // show a background color to the selected answer & toggle the 'check' button
  $('.quiz-answer').on('click', function () {
    $(this).toggleClass('answer-selected');

    if (!$('.quiz-answer').hasClass('answer-selected')) {
      $('#check-btn').hide();
    } else {
      $('#check-btn').show();
    }
  });

  // check submitted answer & show the result
  $('#check-btn').on('click', function () {
    let quizId = $('.quiz-id').eq(i).val();
    let answers = [];

    $('.quiz-answer').each(function () {
      if ($(this).hasClass('answer-selected')) {
        answers.push($(this).data('ans'));
      }
    });

    $.get(checkAnsUrl, { 'quizId': quizId, 'answers': answers }, function (data) {
      if (data.status == 'Correct') {
        rightAnsCount++;
        $('#quiz-status-' + quizId).addClass('text-success');
        $('#quiz-status-' + quizId).html(`<i class="fas fa-check"></i> ${data.status}`);
      } else {
        $('#quiz-status-' + quizId).addClass('text-danger');
        $('#quiz-status-' + quizId).html(`<i class="fas fa-times"></i> ${data.status}`);
      }

      $('#check-btn').hide();
      $('.quiz-option-' + quizId).unbind();
      $('#next-btn').show();
    });
  });

  // show next quiz
  $('#next-btn').on('click', function () {
    if (i < $('.quiz-box').length - 1) {
      i++;
      $('.quiz-box').hide();
      $('.quiz-box').eq(i).show();

      // hide 'next' button
      $(this).hide();

      // remove selected answer of previous question
      $('.quiz-answer.answer-selected').removeClass('answer-selected');
    } else {
      let score = Math.floor((rightAnsCount / numOfQuiz) * 100);

      $('#correct-ans-count').text(rightAnsCount);
      $('#result-percentage').text(score);

      $('.quiz-box').hide();
      $('#quiz-complete').show();

      // hide 'next' button
      $(this).hide();

      let quizScoreData = {
        courseId: courseId,
        lessonId: lessonId,
        score: score,
        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      };

      $.post(quizScoreUrl, quizScoreData, function (response) {
        
      }).done(function () {
        // quiz completion code
        let content_id = $('#quiz-content').data('content_id');
        let completion_status = $('#quiz-content').data('completion_status');

        if (certificateStatus == 1 && completion_status == 0) {
          let quizCompletionData = {
            id: content_id,
            courseId: courseId,
            lessonId: lessonId,
            _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          };

          $.post(contentCompletionUrl, quizCompletionData, function (response) {
            if (response.lessonCompleted == true) {
              $('#lesson-' + lessonId).addClass('lesson-complete');
            }
          });
        }
      });
    }
  });

  setTimeout(function () {
    if (quizStatus && quizStatus == 'retake') {
      $('#scroll-to-quiz')[0].click();
    }
  });

  $('video').each(function() {
    $(this).on('contextmenu', function(e) {
      e.preventDefault();
    });
  });
});


let vidComplete = [];

// video completion code
function videoCompletion(id, contentId) {
  let $video = $('#' + id);

  $('#' + id).on('timeupdate', function () {
    let videoWatchPercentage = Math.trunc((this.currentTime / this.duration) * 100);
    
    if (certificateStatus == 1 && videoWatchPercentage >= 90 && vidComplete.indexOf(id) == -1) {
      sendPostRequest(id, contentId);
    }

  });
}

function sendPostRequest(id, contentId) {
  vidComplete.push(id);
  let videoCompletionData = {
    id: contentId,
    courseId: courseId,
    lessonId: lessonId,
    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  };

  $.post(contentCompletionUrl, videoCompletionData, function (response) {
    if (response.lessonCompleted == true) {
      $('#lesson-' + lessonId).addClass('lesson-complete');
    }
  });
}