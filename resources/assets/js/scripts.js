$(document).ready(function(){
  $("#hamburger").on("click", function(){
    $("body").toggleClass('no-move');
    $(this).toggleClass("active");
    $(".left--sidebar").toggleClass('active');
  });
});
