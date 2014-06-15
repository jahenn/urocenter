<div class="subMenus form">
<?php echo $this->Form->create('SubMenu'); ?>
	<fieldset>
		<legend><?php echo __('Add Sub Menu'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sub Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Sub Menus'), array('controller' => 'menu_sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('controller' => 'menu_sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
