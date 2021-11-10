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
      $("#calculate").load("alldonations.php");
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
  });
  $(".overlay").click(function(e){
      if($(e.target).attr('id')=="responseoverlay") {
          $("#response").removeClass('active');
          $("#responseoverlay").removeClass('active');
      }
  });

});
