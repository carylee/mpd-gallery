<div id="normal-breadcrumbs">
  <a href="/projects">Browse portfolio</a> &gt; Login
</div>
<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
?>
