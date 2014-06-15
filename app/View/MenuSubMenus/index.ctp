<div class="menuSubMenus index">
	<h2><?php echo __('Menu Sub Menus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_menu_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menuSubMenus as $menuSubMenu): ?>
	<tr>
		<td><?php echo h($menuSubMenu['MenuSubMenu']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($menuSubMenu['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $menuSubMenu['Menu']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($menuSubMenu['SubMenu']['id'], array('controller' => 'sub_menus', 'action' => 'view', $menuSubMenu['SubMenu']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $menuSubMenu['MenuSubMenu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $menuSubMenu['MenuSubMenu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $menuSubMenu['MenuSubMenu']['id']), array(), __('Are you sure you want to delete # %s?', $menuSubMenu['MenuSubMenu']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Menus'), array('controller' => 'sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Menu'), array('controller' => 'sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
