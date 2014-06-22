<div class="userAnswers view">
<h2><?php echo __('User Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userAnswer['UserAnswer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Exam'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAnswer['UserExam']['id'], array('controller' => 'user_exams', 'action' => 'view', $userAnswer['UserExam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAnswer['User']['username'], array('controller' => 'users', 'action' => 'view', $userAnswer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAnswer['Question']['question'], array('controller' => 'questions', 'action' => 'view', $userAnswer['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAnswer['Answer']['answer'], array('controller' => 'answers', 'action' => 'view', $userAnswer['Answer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pregunta'); ?></dt>
		<dd>
			<?php echo h($userAnswer['UserAnswer']['pregunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Respuesta'); ?></dt>
		<dd>
			<?php echo h($userAnswer['UserAnswer']['respuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correcta'); ?></dt>
		<dd>
			<?php echo h($userAnswer['UserAnswer']['correcta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($userAnswer['UserAnswer']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Answer'), array('action' => 'edit', $userAnswer['UserAnswer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Answer'), array('action' => 'delete', $userAnswer['UserAnswer']['id']), array(), __('Are you sure you want to delete # %s?', $userAnswer['UserAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Exams'), array('controller' => 'user_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
