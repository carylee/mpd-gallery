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
  var incrementString = function(string){
    return string.replace(/\d+$/, function(n){ return ++n });
  }

  var makeAnotherParticipant = function(){
    var participant = $("fieldset.edit-participant").clone();
    //var label = $(participant).children('label').attr('for');
    var name = $(participant).children('input').attr('name');
    var id = $(participant).children('input').attr('id');
    name = incrementString(name);
    id = incrementString(id);
    alert(name);
  }
  //makeAnotherParticipant();


});
