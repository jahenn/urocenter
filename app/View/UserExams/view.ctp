<div class="userExams view">
<h2><?php echo __('User Exam'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userExam['UserExam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exam'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userExam['Exam']['exam_description'], array('controller' => 'exams', 'action' => 'view', $userExam['Exam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Answer'); ?></dt>
		<dd>
			<?php echo h($userExam['UserExam']['last_answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exam Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userExam['ExamStatus']['nombre'], array('controller' => 'exam_statuses', 'action' => 'view', $userExam['ExamStatus']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Exam'), array('action' => 'edit', $userExam['UserExam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Exam'), array('action' => 'delete', $userExam['UserExam']['id']), array(), __('Are you sure you want to delete # %s?', $userExam['UserExam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Exams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Exam'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Statuses'), array('controller' => 'exam_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Status'), array('controller' => 'exam_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Answers'); ?></h3>
	<?php if (!empty($userExam['UserAnswer'])): ?>
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
	<?php foreach ($userExam['UserAnswer'] as $userAnswer): ?>
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
