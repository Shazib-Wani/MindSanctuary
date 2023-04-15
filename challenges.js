$(document).ready(function() {
    $('.service-link').click(function() {
      $(this).find('.service-item').toggleClass('active');
      $('.submit-button').show();
    });
  
    $('#submit-btn').click(function() {
      // Handle submit button click event here
    });
  });
  