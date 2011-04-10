<div class="email form">
<?php echo $this->Form->create('Participant');// I don't know what to put in create?> 
	<fieldset>
		<legend><?php __('Email Participant'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('name');
		echo $this->Form->input('subject');
		echo $this->Form->input('content');
		//echo $this->Form->input('date_presented');
		//echo $this->Form->input('patent_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
