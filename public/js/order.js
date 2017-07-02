

$('.orderDrugsButton').on('click', function() {
  var form = $('<form method="post" action="/order/drugs/new"> </form>');
  var id = $(this).attr('id');

  $( crsf ).appendTo(form);
  $('<input />').attr('type', 'hidden')
          .attr('name', "prescription_id")
          .attr('value', id)
          .appendTo(form);

  $(document.body).append(form);
  form.submit();

});
