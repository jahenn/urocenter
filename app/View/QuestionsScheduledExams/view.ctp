<div class="questionsScheduledExams view">
<h2><?php echo __('Questions Scheduled Exam'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionsScheduledExam['QuestionsScheduledExam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scheduled Exam'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionsScheduledExam['ScheduledExam']['id'], array('controller' => 'scheduled_exams', 'action' => 'view', $questionsScheduledExam['ScheduledExam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionsScheduledExam['Question']['question'], array('controller' => 'questions', 'action' => 'view', $questionsScheduledExam['Question']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questions Scheduled Exam'), array('action' => 'edit', $questionsScheduledExam['QuestionsScheduledExam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Questions Scheduled Exam'), array('action' => 'delete', $questionsScheduledExam['QuestionsScheduledExam']['id']), null, __('Are you sure you want to delete # %s?', $questionsScheduledExam['QuestionsScheduledExam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Scheduled Exams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Scheduled Exam'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scheduled Exams'), array('controller' => 'scheduled_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheduled Exam'), array('controller' => 'scheduled_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
