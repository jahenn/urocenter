<div class="subMenus view">
<h2><?php echo __('Sub Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subMenu['SubMenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($subMenu['SubMenu']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($subMenu['SubMenu']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($subMenu['SubMenu']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($subMenu['SubMenu']['action']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Menu'), array('action' => 'edit', $subMenu['SubMenu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Menu'), array('action' => 'delete', $subMenu['SubMenu']['id']), array(), __('Are you sure you want to delete # %s?', $subMenu['SubMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Sub Menus'), array('controller' => 'menu_sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('controller' => 'menu_sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menu Sub Menus'); ?></h3>
	<?php if (!empty($subMenu['MenuSubMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Menu Id'); ?></th>
		<th><?php echo __('Sub Menu Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subMenu['MenuSubMenu'] as $menuSubMenu): ?>
		<tr>
			<td><?php echo $menuSubMenu['id']; ?></td>
			<td><?php echo $menuSubMenu['menu_id']; ?></td>
			<td><?php echo $menuSubMenu['sub_menu_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menu_sub_menus', 'action' => 'view', $menuSubMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menu_sub_menus', 'action' => 'edit', $menuSubMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menu_sub_menus', 'action' => 'delete', $menuSubMenu['id']), array(), __('Are you sure you want to delete # %s?', $menuSubMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('controller' => 'menu_sub_menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
