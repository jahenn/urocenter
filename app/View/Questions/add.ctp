


<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Add Question'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('Question', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
							<div class="form-label col-md-2">
								<label for="question" class=" text-transform-cap ">
									question
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('question', array(
							'label'=>false
							)) ?> 
	</div>
						</div>		

				<div class="form-label">
					<label for="Exam" class=" text-transform-cap " >Exam</label>
				</div>
				<div class="form-input">
					<?= $this->Form->input('Exam', array(
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
<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend><?php echo __('Add Question'); ?></legend>
	<?php
		echo $this->Form->input('question');
		echo $this->Form->input('Exam');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->