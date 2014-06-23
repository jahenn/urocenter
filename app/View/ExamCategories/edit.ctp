<div class="examCategories form">
<?php echo $this->Form->create('ExamCategory', array('inputDefaults' => array('div'=>false))); ?>
	<fieldset>
		<legend><?php echo __('Edit Exam Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExamCategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ExamCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exam Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>
