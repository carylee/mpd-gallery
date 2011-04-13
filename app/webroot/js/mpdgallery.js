$(document).ready( function() {
  $('img.project-thumbnail').click( function() {
    $('div.product_img_wrapper img').attr('src', $(this).attr('src'));
  });
});
