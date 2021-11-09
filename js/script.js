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
  });
  $('fieldset').bind('DOMSubtreeModified', function(){
      var ownorgachecked = $('#radio-4').prop('checked');
      console.log(ownorgachecked);

      if (ownorgachecked==true) {
        $('#freetext').prop('disabled', false);
      } else {
        $('#freetext').prop('disabled', true);
      }
  });
});
