


<?php if(!isset($opciones)){$opciones = array(); } ?>
<?php
	$url = WWW_ROOT . 'img' . DS . 'profile' . DS . $custom_user['avatar'];



	if(!file_exists($url)) {
		echo $this->Html->image('avatar77.jpg', $opciones);
	}else{
		echo $this->Html->image('profile/'  . $custom_user['avatar'], $opciones);
	}
 ?>


