(function(){
  $('.submit-prevent-form').on('submit', function(){
    $('.submit-prevent-button').attr('disabled', 'true');

    $('.spinner').show();
  })
})();