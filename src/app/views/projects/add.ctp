<div class="projects form">
<?php echo $this->Form->create('Project', array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('mpd_class');
		echo $this->Form->input('date_presented');
		echo $this->Form->input('patent_number');
	?>
    <fieldset>
      <legend><?php __('Pictures'); ?></legend>
      <div id="pictures">
        <div class="add-picture">
          <?php
            echo $this->Form->input("Picture.0.filename", array('type'=>'file', 'div' => 'project-picture'));
            echo $this->Form->input("Picture.0.mimetype", array('type'=>'hidden'));
            echo $this->Form->input("Picture.0.filesize", array('type'=>'hidden'));
            echo $this->Form->input("Picture.0.dir", array('type'=>'hidden'));
          ?>
        </div>
      </div>
      <button class="add" id="add-picture-field">Add another?</button>
    </fieldset>
    <fieldset>
      <legend>Participants</legend>
      <div id="participants">
      <fieldset class="edit-participant">
          <?php echo $this->Form->input("Participant.0.name");
            echo $this->Form->input("Participant.0.email");
            echo $this->Form->input("Participant.0.company");?>
      </fieldset>
      </div>
      <button class="add" id="add-participant-field">Add another?</button>
    </fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
	</ul>
</div>
