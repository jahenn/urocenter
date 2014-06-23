


<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Edit Exam'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('Exam', array(
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
								<label for="exam_category_id" class=" text-transform-cap ">
									exam_category_id
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('exam_category_id', array(
							'label'=>false
							)) ?> 
	</div>
						</div><div class="form-row">
							<div class="form-label col-md-2">
								<label for="exam_description" class=" text-transform-cap ">
									exam_description
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('exam_description', array(
							'label'=>false
							)) ?> 
	</div>
						</div>		

				<div class="form-label">
					<label for="Question" class=" text-transform-cap " >Question</label>
				</div>
				<div class="form-input">
					<?= $this->Form->input('Question', array(
						'label'=>false
						)) ?> 
				</div>
			 	
			 

<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
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
-->