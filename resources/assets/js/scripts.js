$(document).ready(function(){
  $("#hamburger").on("click", function(){
    $("body").toggleClass('no-move');
    $(this).toggleClass("active");
    $(".left--sidebar").toggleClass('active');
  });

  $("#student_password_confirm").keyup(function(){
    if($(this).val() == $("#student_password").val()){
      $(this).removeClass('input--error').addClass('input--success');
      $(".submit-block input").removeAttr('disabled');

    }else{
      $(this).removeClass('input--success').addClass('input--error');
      $(".submit-block input").attr('disabled', 'true');
    }
  });

});
