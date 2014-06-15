<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['role_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Description'); ?></dt>
		<dd>
			<?php echo h($role['Role']['role_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array(), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Menus'), array('controller' => 'role_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Menu'), array('controller' => 'role_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Role Menus'); ?></h3>
	<?php if (!empty($role['RoleMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['RoleMenu'] as $roleMenu): ?>
		<tr>
			<td><?php echo $roleMenu['id']; ?></td>
			<td><?php echo $roleMenu['role_id']; ?></td>
			<td><?php echo $roleMenu['menu_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'role_menus', 'action' => 'view', $roleMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'role_menus', 'action' => 'edit', $roleMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'role_menus', 'action' => 'delete', $roleMenu['id']), array(), __('Are you sure you want to delete # %s?', $roleMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role Menu'), array('controller' => 'role_menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
