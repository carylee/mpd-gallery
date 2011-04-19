<fieldset class='add-participant'>
<?php echo $this->Form->input("Participant.$number.name");
      echo $this->Form->input("Participant.$number.email");
      echo $this->Form->input("Participant.$number.company");
      echo $this->Form->input("Participant.$number.id", array('type'=>'hidden'));
?>
</fieldset>
