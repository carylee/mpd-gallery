<div class="email form">
<?php echo $this->Form->create('Participant', array('action'=>'email'));// I don't know what to put in create?> 
	<fieldset>
    <legend>Send a Message to <span class="recipient-name"><?php echo $participant['Participant']['name']; ?></span></legend>
	<?php
		echo $form->input('email', array('label' => 'Your email address'));
		echo $this->Form->input('name', array('label'=>'Your name'));
		echo $this->Form->input('subject');
		echo $this->Form->input('message',array('type' =>'textarea'));
    echo $this->Form->hidden('id', array('value'=>$participant['Participant']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
