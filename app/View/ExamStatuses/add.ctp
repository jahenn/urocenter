


<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Add Exam Status'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('ExamStatus', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
							<div class="form-label col-md-2">
								<label for="nombre" class=" text-transform-cap ">
									nombre
								</label>
							</div><div class="form-input col-md-10">		 <?= $this->Form->input('nombre', array(
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
<div class="examStatuses form">
<?php echo $this->Form->create('ExamStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Exam Status'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exam Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Exams'), array('controller' => 'user_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->