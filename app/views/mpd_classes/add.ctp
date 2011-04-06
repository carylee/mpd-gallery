<div class="mpdClasses form">
<?php echo $this->Form->create('MpdClass');?>
	<fieldset>
		<legend><?php __('Add Mpd Class'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('course_year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mpd Classes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>