<div class='add-picture'>
<?php
  echo $this->Form->input("Picture.$number.filename", array('type' => 'file')); 
  echo $this->Form->input("Picture.$number.dir", array('type' => 'hidden')); 
  echo $this->Form->input("Picture.$number.mimetype", array('type' => 'hidden')); 
  echo $this->Form->input("Picture.$number.filesize", array('type' => 'hidden')); 
?>
</div>
