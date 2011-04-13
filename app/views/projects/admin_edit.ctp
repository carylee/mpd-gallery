<div class="projects form">
<?php echo $this->Form->create('Project',array('url'=>array('action'=>'admin_edit')));?>
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
    </fieldset>
     	<fieldset>
                <legend><?php __('Add Participants'); ?></legend>
        <?php 
		for ($i=0;$i<6;$i++)
		{
        echo $this->Form->input('Participant.'.$i.'.name');
		echo $this->Form->input('Participant.'.$i.'.email');
		echo $this->Form->input('Participant.'.$i.'.company');
	    }
	?>
	</fieldset> 
	
<?php echo $this->Form->end(__('Submit', true));?>
</div>
