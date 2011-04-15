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
    for ($j=0;$j<3;$j++) {
      echo $this->Form->input('Picture.'.$j.'.images', array('type' => 'file')); 
    }
	?>
	</fieldset>
<?php echo $this->Html->link('Cancel', array('action'=>'view', $project['Project']['id'])); ?>
<?php echo $this->Form->end(__('Save', true));?>
</div>
