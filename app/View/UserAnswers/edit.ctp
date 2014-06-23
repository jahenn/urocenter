


<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Edit User Answer'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('UserAnswer', array(
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
								<label for="user_exam_id" class=" text-transform-cap ">
									user_exam_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('user_exam_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="user_id" class=" text-transform-cap ">
									user_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('user_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="question_id" class=" text-transform-cap ">
									question_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('question_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="answer_id" class=" text-transform-cap ">
									answer_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('answer_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="pregunta" class=" text-transform-cap ">
									pregunta
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('pregunta', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="respuesta" class=" text-transform-cap ">
									respuesta
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('respuesta', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="correcta" class=" text-transform-cap ">
									correcta
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('correcta', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="valor" class=" text-transform-cap ">
									valor
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('valor', array(
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
<div class="userAnswers form">
<?php echo $this->Form->create('UserAnswer'); ?>
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
-->