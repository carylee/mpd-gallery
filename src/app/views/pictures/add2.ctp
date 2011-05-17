<div class="pictures form">
<?php echo $this->Form->create('Picture', array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Admin Add Picture'); ?></legend>
	<?php
		echo $this->Form->input('filename', array('type'=>'file'));
		echo $this->Form->input('project_id');
		echo $this->Form->input('dir', array('type'=>'hidden'));
		echo $this->Form->input('mimetype', array('type'=>'hidden'));
		echo $this->Form->input('filesize', array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pictures', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
