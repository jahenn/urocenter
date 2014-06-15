<div class="menuSubMenus form">
<?php echo $this->Form->create('MenuSubMenu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Menu Sub Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('sub_menu_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MenuSubMenu.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MenuSubMenu.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Sub Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Menus'), array('controller' => 'sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Menu'), array('controller' => 'sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
