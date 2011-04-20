<div class="projects">
<?php echo $this->Form->create('Project',array('url'=>array('action'=>'edit'), 'type'=>'file'));?>
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
		<legend><?php __('Edit Pictures'); ?></legend>
	<?php $j=0;
	     foreach ($project['Picture'] as $picture): $j++?>
          <div class="project-picture-edit">
          <div class="margin_r_10"><?php echo $this->Html->image('projects/' . $picture['filename']);?></div>
            <ul>
              <li><?php echo $this->Html->link(__('Set as Cover',true),array('controller'=>'projects','action'=>'setCover',$project['Project']['id'],$picture['id']));?></li>
              <li><?php echo $this->Html->link(__('Delete', true), array('controller'=>'pictures','action' => 'delete', $picture['id']), array('class'=>'delete-picture'));?></li>
            </ul>
          </div>
		     
      <?php endforeach; ?>
	  </fieldset>
	  <fieldset>
		<legend><?php __('Add Pictures'); ?></legend><div style= "font-size:15px;color:red"> * Note: only .jpg .jnp .gif  files within 2MB are allowed! </div>
      <div id="pictures">
        <div class="add-picture">
          <?php
            echo $this->Form->input('Picture.0.filename', array('type' => 'file')); 
            echo $this->Form->input('Picture.0.dir', array('type' => 'hidden')); 
            echo $this->Form->input('Picture.0.mimetype', array('type' => 'hidden')); 
            echo $this->Form->input('Picture.0.filesize', array('type' => 'hidden')); 
          ?>
        </div>
      </div>
      <button id="add-picture-field">Add another?</button>
	</fieldset>
<fieldset>
<div id="participants">
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
</div>
<button id="add-participant-field">Add another?</button>
</fieldset>
  
<?php echo $this->Html->link('Cancel', array('action'=>'view', $project['Project']['id'])); ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
