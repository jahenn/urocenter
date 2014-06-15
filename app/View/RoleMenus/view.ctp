<div class="roleMenus view">
<h2><?php echo __('Role Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($roleMenu['RoleMenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roleMenu['Role']['id'], array('controller' => 'roles', 'action' => 'view', $roleMenu['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roleMenu['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $roleMenu['Menu']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role Menu'), array('action' => 'edit', $roleMenu['RoleMenu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role Menu'), array('action' => 'delete', $roleMenu['RoleMenu']['id']), array(), __('Are you sure you want to delete # %s?', $roleMenu['RoleMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
