


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Edit Menu'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('Menu', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row"><div class="form-input col-md-10">		 <?= $this->Form->input('id', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="nombre" class=" text-transform-cap ">
			nombre
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('nombre', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="child_menu" class=" text-transform-cap ">
			child_menu
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('child_menu', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="controller" class=" text-transform-cap ">
			controller
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('controller', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="action" class=" text-transform-cap ">
			action
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('action', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="class" class=" text-transform-cap ">
			class
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('class', array(
			'label'=>false
			)) ?> 
	</div>
</div>		

		<div class="form-label">
		<label for="Role" class=" text-transform-cap " >Role</label>
		</div>
		<div class="form-input">
		<?= $this->Form->input('Role', array(
			'label'=>false
			)) ?> 
</div>



<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('child_menu');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
		echo $this->Form->input('class');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Menu.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Menu.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->