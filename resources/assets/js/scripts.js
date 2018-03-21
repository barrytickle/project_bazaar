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

  var elements = $('.modal-overlay, .modal');

  $('.trigger').click(function(){
      var slug = $(this).data('slug');
      var user = $(this).data('user');
      $.ajax({
          url: "/ajaxrequest/modal-load/"+user+'/'+slug,
        }).done(function(data) {
          $("#modal--content").html(data);
          elements.addClass('active');
      });
  });

  $('.close-modal').click(function(){
      elements.removeClass('active');
  });

  $( document).on('click', ".element--like i", function(){
    var slug = $(this).data('slug');
    var user = $(this).data('user');
    var element = $(this);
    $.ajax({
        url: "/ajaxrequest/like-project/"+user+'/'+slug,
      }).done(function() {
        console.log('fire');
        element.toggleClass( "press", 1000 );
    });

  });

  $("#degree--group").on('change', function(){
    $(".project--display").html($(this).val());
  });

  // $(".text--group select").selectize();

});
