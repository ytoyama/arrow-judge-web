<?php App::uses('Debugger', 'Utility'); ?>
<h1>Registration</h1>
<div class="row-fluid">
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('type' => 'text'));
	echo $this->Form->input('email', array('type' => 'text'));
	echo $this->Form->input('password', array('type' => 'password'));
	echo $this->Form->input('confirm_password', array('type' => 'password'));
	echo $this->Form->end('Register');
?>
</div>
