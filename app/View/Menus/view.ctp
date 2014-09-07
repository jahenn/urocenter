<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Menu'); ?>       	       <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>
				<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Nombre'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['nombre']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Child Menu'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['child_menu']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Controller'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['controller']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Action'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['action']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Class'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($menu['Menu']['class']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>
<div class="related">
	<?php if (!empty($menu['ChildMenu'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="7">
					<?php echo __('Related Menus'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Child Menu'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Class'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td><?php echo $childMenu['id']; ?></td>
			<td><?php echo $childMenu['nombre']; ?></td>
			<td><?php echo $childMenu['child_menu']; ?></td>
			<td><?php echo $childMenu['controller']; ?></td>
			<td><?php echo $childMenu['action']; ?></td>
			<td><?php echo $childMenu['class']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $childMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), array(), __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Menu'), array('controller' => 'menus', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>
<div class="related">
	<?php if (!empty($menu['Role'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="4">
					<?php echo __('Related Roles'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('User Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
			<td><?php echo $role['user_role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>



<!-- ############# -->

<!--
<div class="menus view">
<h2><?php echo __('Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Menu'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['child_menu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['class']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), array(), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($menu['ChildMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Child Menu'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Class'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td><?php echo $childMenu['id']; ?></td>
			<td><?php echo $childMenu['nombre']; ?></td>
			<td><?php echo $childMenu['child_menu']; ?></td>
			<td><?php echo $childMenu['controller']; ?></td>
			<td><?php echo $childMenu['action']; ?></td>
			<td><?php echo $childMenu['class']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $childMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), array(), __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($menu['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('User Role'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
			<td><?php echo $role['user_role']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->
