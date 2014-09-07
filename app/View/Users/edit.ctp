
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Editar Usuario</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>


<?php echo $this->Form->create('User', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<?= $this->Form->input('id', array(
'label'=>false
)) ?> 
<br>

<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('username', array(
		'label'=>'Nombre de Usuario',
		'class'=>'form-control width-12', 'disabled'=>false
		)) ?> 
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('email', array(
		'label'=>'Correo Electronico',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('nombre', array(
		'label'=>'Nombre',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('apellido', array(
		'label'=>'Apellido (s)',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
	
</div>
<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('nacionalidad', array(
		'label'=>'Nacionalidad',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('sexo', array(
		'options'=>array('H'=>'Hombre', 'M'=>'Mujer'),
		'label'=>'Sexo',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
	
</div>
<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('hospital', array(
		'label'=>'Hospital',
		'class'=>'form-control width-12'
		)) ?> 
	</div>
</div>



<?php if($is_admin): ?>

<div class="form-label">
	<label for="Role" class=" text-transform-cap " >Grupos de Usuario</label>
</div>
<div class="form-input">
	<?= $this->Form->input('Role', array(
		'label'=>false
		)) ?> 
</div>

<?php endif ?>

<?= $this->Form->input('role_id', array(
	'type'=>'hidden'
)) ?>


<?= $this->Form->input('password', array(
	'type'=>'hidden'
)) ?>
<?= $this->Form->input('fecha_registro', array(
	'type'=>'hidden'
)) ?>
<?= $this->Form->input('activo', array(
	'type'=>'hidden'
)) ?>
<?= $this->Form->input('baja', array(
	'type'=>'hidden'
)) ?>
<?= $this->Form->input('avatar', array(
	'type'=>'hidden'
)) ?>
<br>


<a href="#" class="btn btn-default"><i class="fa fa-arrow-left"></i> Regresar</a>
<button class="btn primary-bg" type="submit"><i class="fa fa-save"></i> Guardar</button>

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
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->