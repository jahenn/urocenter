<div class="exams form">
<?php echo $this->Form->create('Exam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exam'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exam_category_id');
		echo $this->Form->input('exam_description');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Exam.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Exam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exam Categories'), array('controller' => 'exam_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Category'), array('controller' => 'exam_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
