$(document).ready( function() {
  $('img.project-thumbnail').click( function() {
    $('div.product_img_wrapper img').attr('src', $(this).attr('src'));
  });

  $('.delete-picture').click(function(e){
    e.preventDefault();
    if(confirmDelete()) {
      $.get($(this).attr('href'));
      $(this).parent('div').fadeOut();
    }
  });

  var confirmDelete = function(){
    var del = confirm("Are you sure you want to delete this picture?");
    return del;
  }
  
});
