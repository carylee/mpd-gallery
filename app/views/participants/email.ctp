<div class="email form">
<?php echo $this->Form->create('Participant', array('action'=>'email'));// I don't know what to put in create?> 
	<fieldset>
		<legend><?php __('Email ' . $participant['Participant']['name']); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('name');
		echo $this->Form->input('subject');
		echo $this->Form->input('content');
    echo $this->Form->hidden('id', array('value'=>$participant['Participant']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
