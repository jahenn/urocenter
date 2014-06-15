<div class="subMenus index">
	<h2><?php echo __('Sub Menus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('controller'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subMenus as $subMenu): ?>
	<tr>
		<td><?php echo h($subMenu['SubMenu']['id']); ?>&nbsp;</td>
		<td><?php echo h($subMenu['SubMenu']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($subMenu['SubMenu']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($subMenu['SubMenu']['controller']); ?>&nbsp;</td>
		<td><?php echo h($subMenu['SubMenu']['action']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subMenu['SubMenu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subMenu['SubMenu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subMenu['SubMenu']['id']), array(), __('Are you sure you want to delete # %s?', $subMenu['SubMenu']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sub Menu'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Menu Sub Menus'), array('controller' => 'menu_sub_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Sub Menu'), array('controller' => 'menu_sub_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
