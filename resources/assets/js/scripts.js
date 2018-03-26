$(document).ready(function(){
  /* Global javascript function to trigger the hamburger menu on mobile */
  $("#hamburger").on("click", function(){
    $("body").toggleClass('no-move');
    $(this).toggleClass("active");
    $(".left--sidebar").toggleClass('active');
  });

/* Used to check the student password on input with the register form */
  $("#student_password_confirm").keyup(function(){
    if($(this).val() == $("#student_password").val()){
      $(this).removeClass('input--error').addClass('input--success');
      $(".submit-block input").removeAttr('disabled');

    }else{
      $(this).removeClass('input--success').addClass('input--error');
      $(".submit-block input").attr('disabled', 'true');
    }
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


  /* Used for the staff dashboard, live approval of comments used around the panel e.g. project pages, index pages */
  $(".btn-approve").click(function(e){
      e.preventDefault();
      var action = $(this).attr('href');
      $.ajax({
          url: action
        }).done(function() {
          location.reload();
      });
  });

  /*
      Will use ajax to send the comment to the db, will reload upon completion to
      keep the user on the page wherever they are.
  */

  $(".comment--form").submit(function(e){
      var action = $(this).attr('action');
      $(this).append('<img src="/images/icons/ajax-loader.svg">');
      $.ajax({
           type: "POST",
           url: action,
           data: $(this).serialize(), // serializes the form's elements.
           success: function(data)
           {
               location.reload();
           }
         });
    e.preventDefault(); // avoid to execute the actual submit of the form.
  });


});
