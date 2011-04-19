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
      <?php
        foreach( range(1,4) as $n ) {
          echo $this->Form->input("Picture.$n.filename", array('type'=>'file', 'div' => 'project-picture'));
          echo $this->Form->input("Picture.$n.mimetype", array('type'=>'hidden'));
          echo $this->Form->input("Picture.$n.filesize", array('type'=>'hidden'));
          echo $this->Form->input("Picture.$n.dir", array('type'=>'hidden'));
        }
      ?>
    </fieldset>
    <fieldset>
      <legend>Participants</legend>
      <fieldset class="edit-participant">
          <?php echo $this->Form->input("Participant.1.name");
            echo $this->Form->input("Participant.1.email");
            echo $this->Form->input("Participant.1.company");?>
      </fieldset>
      <button id="add-participant">Add another</button>
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
