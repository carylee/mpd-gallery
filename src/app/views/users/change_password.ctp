<div class="users form">
<?php echo $this->Form->create('User',array('action'=>'changePassword'));?> 
<fieldset>
		<legend><?php __('ChangePassword'); ?></legend>
<?php 
   	echo $this->Form->input('id');
    echo $this->Form->input('username');	
 	echo $this->Form->input('password', array('size' => 20,'type'=>'password' ,'label'=>'old password: please delete and retype your password')); 
 	echo $this->Form->input('new_password', array('size' => 20,'type'=>'password')); 
    echo $this->Form->input('confirm_password', array('size' => 20,'type'=>'password')); ?>
    
</fieldset>
   <?php echo $this->Form->end(__('Submit', true));?>
</div>
