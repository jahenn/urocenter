


<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Edit User Exam'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('UserExam', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row"><div class="form-input col-md-10">		 <?= $this->Form->input('id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="exam_id" class=" text-transform-cap ">
									exam_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('exam_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="last_answer" class=" text-transform-cap ">
									last_answer
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('last_answer', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="exam_status_id" class=" text-transform-cap ">
									exam_status_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('exam_status_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div>
<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
<div class="userExams form">
<?php echo $this->Form->create('UserExam'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Exam'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exam_id');
		echo $this->Form->input('last_answer');
		echo $this->Form->input('exam_status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserExam.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserExam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Statuses'), array('controller' => 'exam_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Status'), array('controller' => 'exam_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->