<?php 
	$user = $this->Session->read()['Auth']['User'];
 ?>
<?= ($user['avatar'] != '')?$this->Html->image('profile/'  . $user['avatar']):$this->Html->image('avatar77.jpg'); ?>

