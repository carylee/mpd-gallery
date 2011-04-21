$(document).ready( function() {
  $('img.project-thumbnail').click( function() {
    $('div.product_img_wrapper img').attr('src', $(this).attr('src'));
  });

  $('.delete-picture').click(function(e){
    e.preventDefault();
    if(confirmDelete()) {
      $.get($(this).attr('href'));
      $(this).parents('div.project-picture-edit').fadeOut();
    }
  });

  var confirmDelete = function(){
    var del = confirm("Are you sure you want to delete this picture?");
    return del;
  }

  $("#add-participant-field").click(function(e){
    e.preventDefault();
    var num = $("#participants fieldset").length;
    var url = "/projects/addParticipant/" + num;
    $("<div>").load(url, function() {
      $("#participants").append($(this).html());
    });
  });

  $("#add-picture-field").click(function(e){
    e.preventDefault();
    var num = $("#pictures div.add-picture").length;
    var url = "/projects/addFile/" + num;
    $("<div>").load(url, function(){
      $("#pictures").append($(this).html());
    });
  });

  $("#like").click(function(e){
    e.preventDefault();
    $.get($(this).attr('href'), function(data){
      $("#like-count").fadeOut( function() {
        $(this).text(data);
        $(this).fadeIn();
        $("#like").addClass('not-a-link');
      });
    });
  });


  
});
