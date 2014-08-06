<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Agregar Usuario</span class="font-size-20">
			<hr>
	</div>
</div>

<?php echo $this->Form->create('User', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>

<p>
	 <?= $this->Form->input('username', array(
		'label'=>'Nombre de Usuario',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	 <?= $this->Form->input('nombre_completo', array(
		'label'=>'Nombre Completo',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	 <?= $this->Form->input('password', array(
		'label'=>'Contraseña',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	<?= $this->Form->input('email', array(
		'label'=>'Correo Electronico',
		'class'=>'form-control width-12'
		)) ?> 
</p>


<br>
<h4>Grupos</h4>
<?= $this->Form->input('Role', array(
	'label'=>false
	)) ?> 


<br>

<button class="btn btn-primary submit" type="submit"><i class="fa fa-save"></i> Guardar</button>


<?= $this->Form->input('fecha_registro', array(
	'type'=>'hidden',
	)) ?>


<?php echo $this->Form->end(); ?>
<br>
<br>


<script type="text/javascript">
	
	$(document).ready(function(){
		//alert("ok");
		$("#RoleRole").multiSelect();
	});

</script>

<!-- ################ -->
<!--
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->