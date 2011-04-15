<div class="projects">
<?php echo $this->Form->create('Project',array('url'=>array('action'=>'edit')));?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('mpd_class');
		echo $this->Form->input('date_presented');
		echo $this->Form->input('patent_number');
	?>
	</fieldset>
		<fieldset>
		<legend><?php __('Pictures'); ?></legend>
<?php foreach( $project['Picture'] as $picture ): ?>
  <div class='project-picture-edit'>
  <?php echo $this->Html->image('projects/' . $picture['filename']);
    echo $this->Html->link('Delete?', array('controller'=>'pictures', 
              'action'=>'delete', 
              $picture['id']), array('class'=>'delete-picture'));?>
  </div>
  <?php endforeach; ?>
	<?php
    echo $this->Form->input('Picture.0.filename', array('type'=>'file','label'=>'Add an image')); 
	?>
	</fieldset>
<fieldset>
  <legend><?php __('Participants');?></legend>
  <?php foreach($project['Participant'] as $index=>$participant): ?>
    <fieldset class='edit-participant'>
<?php echo $this->Form->input("Participant.$index.name");
      echo $this->Form->input("Participant.$index.email");
      echo $this->Form->input("Participant.$index.company");
      echo $this->Form->input("Participant.$index.id", array('type'=>'hidden'));
?>
  </fieldset>
<?php endforeach; ?>
  <?php 
foreach(range(count($project['Participant']), count($project['Participant']) ) as $index): ?>
  <fieldset class='edit-participant'>
<?php
      echo $this->Form->input("Participant.$index.name");
      echo $this->Form->input("Participant.$index.email");
      echo $this->Form->input("Participant.$index.company");
?>
  </fieldset>
<?php endforeach; ?>
  

  
</fieldset>
<?php echo $this->Html->link('Cancel', array('action'=>'view', $project['Project']['id'])); ?>
<?php echo $this->Form->end(__('Save', true));?>
</div>
