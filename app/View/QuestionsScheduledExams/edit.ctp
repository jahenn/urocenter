<div class="questionsScheduledExams form">
<?php echo $this->Form->create('QuestionsScheduledExam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Questions Scheduled Exam'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('scheduled_exam_id');
		echo $this->Form->input('question_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QuestionsScheduledExam.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('QuestionsScheduledExam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Questions Scheduled Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Scheduled Exams'), array('controller' => 'scheduled_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheduled Exam'), array('controller' => 'scheduled_exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
