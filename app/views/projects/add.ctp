<div class="projects form">
<?php echo $this->Form->create('Project');?>
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
        }
      ?>
    </fieldset>
    <fieldset>
<legend>Participants</legend>
<?php foreach( range(1,4) as $n): ?>
<fieldset>
<?php echo $this->Form->input("Participant.$n.name");
          echo $this->Form->input("Participant.$n.email");
          echo $this->Form->input("Participant.$n.company");?>
</fieldset>
<?php endforeach; ?>
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
