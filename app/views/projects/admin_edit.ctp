<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
		<legend><?php __('Admin Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('mpd_class');
		echo $this->Form->input('date_presented');
		echo $this->Form->input('patent_number');
	?>
    <fieldset>
      <legend>Project Participants</legend>
  <?php
    echo $this->Form->input('Participant.name');
    echo $this->Form->input('Participant.email');
    echo $this->Form->input('Participant.company');
  ?>
    </fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
