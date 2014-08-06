
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Agregar Grupo</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<?php echo $this->Form->create('Role', array(
			'inputDefaults'=>array(
				'div'=>false
				)
		)); ?>

		<?= $this->Form->input('nombre', array(
		'label'=>'Nombre del Grupo',
		'class'=>'form-control width-12'
		)) ?>

		
		<?= $this->Form->input('user_role', array(
			'type'=>'hidden',
			'value'=>'0'
		)) ?>
		<br>

		<button class="btn btn-primary submit" type="submit"><i class="fa fa-save"></i> Guardar</button>

		<?php echo $this->Form->end(); ?>
	</div>
</div>
<br>
<br>

<!-- ################ -->
<!--
<div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Add Role'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('user_role');
		echo $this->Form->input('Menu');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->