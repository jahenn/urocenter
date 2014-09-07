


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Edit Question Question'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('QuestionQuestion', array(
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
			<label for="question_id" class=" text-transform-cap ">
			question_id
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('question_id', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="child_question_id" class=" text-transform-cap ">
			child_question_id
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('child_question_id', array(
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
<div class="questionQuestions form">
<?php echo $this->Form->create('QuestionQuestion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Question Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('child_question_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QuestionQuestion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QuestionQuestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Question Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->