<div class="menuSubMenus view">
<h2><?php echo __('Menu Sub Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menuSubMenu['MenuSubMenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuSubMenu['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $menuSubMenu['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menuSubMenu['SubMenu']['id'], array('controller' => 'sub_menus', 'action' => 'view', $menuSubMenu['SubMenu']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu Sub Menu'), array('action' => 'edit', $menuSubMenu['MenuSubMenu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu Sub Menu'), array('action' => 'delete', $menuSubMenu['MenuSubMenu']['id']), array(), __('Are you sure you want to delete # %s?', $menuSubMenu['MenuSubMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sub Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Menus'), array('controller' => 'sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Menu'), array('controller' => 'sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
