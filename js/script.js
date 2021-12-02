$( function() {
  $( ".radio" ).checkboxradio();
  $("#orgachooser").submit(function(e) {

      e.preventDefault(); // avoid to execute the actual submit of the form.

      var form = $(this);
      var url = form.attr('action');
      $.ajax({
             type: "post",
             url: url,
             data: form.serialize(), // serializes the form's elements.
             success: function(data)
             {
                 $('#response').html(data); // show response from the php script.
             }
           });
      
      $("#response").addClass("active");
      $("#responseoverlay").addClass('active');
  });
  $('fieldset').bind('DOMSubtreeModified', function(){
      var ownorgachecked = $('.own').prop('checked');
      if (ownorgachecked==true) {
        $('#freetext').prop('disabled', false);
      } else {
        $('#freetext').prop('disabled', true);
      }
  });
  $("#closeresponse").click(function(){
      $("#response").removeClass('active');
      $("#responseoverlay").removeClass('active');
      $("#calculate").load("alldonations.php");
  });
  $(".overlay").click(function(e){
      if($(e.target).attr('id')=="responseoverlay") {
          $("#response").removeClass('active');
          $("#responseoverlay").removeClass('active');
          $("#calculate").load("alldonations.php");
      }
  });
  $(".tuerchen3").click(function(){
    $( ".tuerchen3" ).toggle( "slide" );
    setTimeout(
      function()
      {
          $( ".behindthedoor" ).toggle( "slide" );  //do something special
      }, 500);


  })

  $('.pshow').mousedown(function () {
      $('#passwordinput')[0].type = 'text';
    timeout = setInterval(function () {
      $('#passwordinput')[0].type = 'text';
    }, 500);

    return false;
  });
  $('.pshow').mouseup(function () {
    $('#passwordinput')[0].type = 'password';
    clearInterval(timeout);
    return false;
  });
  $('.pshow').mouseout(function () {
    $('#passwordinput')[0].type = 'password';
    clearInterval(timeout);
    return false;
  });

});
