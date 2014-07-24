<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('User'); ?>       	       <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>


<h2><?= $user['User']['username'] ?></h2>
<h4>Correo Electronico: <small><?= $user['User']['email'] ?></small></h4>
<br><br><br>

<?php if($user['User']['activo'] == false): ?>
	<div class="row">
		<div class="col-md-6">
			<?php $aprobar_url = $this->Html->url(array(
				'action'=>'aprobe', $user['User']['id']
			)); ?>
			<a href="#" class="btn error-bg large"><i class="fa fa-times"></i></a>
			<a href="<?= $aprobar_url ?>" class="btn success-bg large">Aprobar Usuario <i class="fa fa-check"></i></a>
		</div>
	</div>
<?php endif ?>



<!-- <div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>
				<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Username'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Password'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Email'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div> -->



<!-- <div class="related">
	<?php if (!empty($user['UserAnswer'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="10">
					<?php echo __('Related User Answers'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Exam Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Pregunta'); ?></th>
		<th><?php echo __('Respuesta'); ?></th>
		<th><?php echo __('Correcta'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserAnswer'] as $userAnswer): ?>
		<tr>
			<td><?php echo $userAnswer['id']; ?></td>
			<td><?php echo $userAnswer['user_exam_id']; ?></td>
			<td><?php echo $userAnswer['user_id']; ?></td>
			<td><?php echo $userAnswer['question_id']; ?></td>
			<td><?php echo $userAnswer['answer_id']; ?></td>
			<td><?php echo $userAnswer['pregunta']; ?></td>
			<td><?php echo $userAnswer['respuesta']; ?></td>
			<td><?php echo $userAnswer['correcta']; ?></td>
			<td><?php echo $userAnswer['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_answers', 'action' => 'view', $userAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_answers', 'action' => 'edit', $userAnswer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_answers', 'action' => 'delete', $userAnswer['id']), array(), __('Are you sure you want to delete # %s?', $userAnswer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>
<div class="related">
	<?php if (!empty($user['Role'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="3">
					<?php echo __('Related Roles'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
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
</div> -->
<br>



<!-- ############# -->

<!--
<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related User Answers'); ?></h3>
	<?php if (!empty($user['UserAnswer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Exam Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Pregunta'); ?></th>
		<th><?php echo __('Respuesta'); ?></th>
		<th><?php echo __('Correcta'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserAnswer'] as $userAnswer): ?>
		<tr>
			<td><?php echo $userAnswer['id']; ?></td>
			<td><?php echo $userAnswer['user_exam_id']; ?></td>
			<td><?php echo $userAnswer['user_id']; ?></td>
			<td><?php echo $userAnswer['question_id']; ?></td>
			<td><?php echo $userAnswer['answer_id']; ?></td>
			<td><?php echo $userAnswer['pregunta']; ?></td>
			<td><?php echo $userAnswer['respuesta']; ?></td>
			<td><?php echo $userAnswer['correcta']; ?></td>
			<td><?php echo $userAnswer['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_answers', 'action' => 'view', $userAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_answers', 'action' => 'edit', $userAnswer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_answers', 'action' => 'delete', $userAnswer['id']), array(), __('Are you sure you want to delete # %s?', $userAnswer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($user['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
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
