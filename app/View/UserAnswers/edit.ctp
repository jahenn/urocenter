<div class="userAnswers form">
<?php echo $this->Form->create('UserAnswer', array('inputDefaults' => array('div'=>false))); ?>
	<fieldset>
		<legend><?php echo __('Edit User Answer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_exam_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer_id');
		echo $this->Form->input('pregunta');
		echo $this->Form->input('respuesta');
		echo $this->Form->input('correcta');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserAnswer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserAnswer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('action' => 'index')); ?></li>
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
