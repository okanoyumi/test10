var $ = require("jquery");

$(function() {
  $('.h-nav').click(function() {
    $(this).toggleClass("active");
    if($(this).hasClass('active')) {
      $('.g-nav').addClass('active');
    } else {
      ('.g-nav').removeclass('active');
    }
  });
});
console.log('test');
