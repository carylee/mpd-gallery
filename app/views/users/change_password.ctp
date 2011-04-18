<div class="users form">
<?php echo $this->Form->create('User',array('action'=>'changePassword'));?> 
<?php 
   	echo $this->Form->input('id');
    echo $this->Form->input('username');	
 	echo $this->Form->input("old_password", array('size' => 20, 
'type'=>'password')); 
 	echo $this->Form->input('new_password', array('size' => 
20,'type'=>'password')); 
    echo $this->Form->input('confirm_password', array('size' => 
20,'type'=>'password')); 
    echo $this->Form->submit('Change');?> 
</form> 
</div>
