


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Add Scheduled Exam'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('ScheduledExam', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
	<div class="form-label col-md-2">
		<label for="titulo" class=" text-transform-cap ">
			titulo
		</label>
	</div>
	<div class="form-input col-md-10">		 
		<?= $this->Form->input('titulo', array(
			'label'=>false
			)) ?> 
	</div>
</div>

<div class="form-row">
	<div class="form-label col-md-2">
		<label for="fecha_programada" class=" text-transform-cap ">
			Fecha de Inicio
		</label>
	</div>
	<div class="form-input col-md-10">		 <?= $this->Form->input('fecha_programada', array(
		'label'=>false,
		'type'=>'text',
		'class'=>'date'
		)) ?> 
	</div>
</div>

<div class="form-row">
	<div class="form-label col-md-2">
		<label for="fecha_limite" class=" text-transform-cap ">
			Fecha Limite
		</label>
	</div>
	<div class="form-input col-md-10">		 <?= $this->Form->input('fecha_limite', array(
		'label'=>false,
		'type'=>'text',
		'class'=>'date'
		)) ?> 
	</div>
</div>

<!--  -->


<div class="form-row">
	<div class="form-input col-md-10">		 
		<?= $this->Form->input('estatus', array(
			'label'=>false,
			'type'=>'hidden',
			'value'=>1
			)) ?> 
		</div>
	</div><div class="form-row">
	<div class="form-label col-md-2">
		<label for="comentarios" class=" text-transform-cap ">
			comentarios
		</label>
		</div><div class="form-input col-md-10">		 
		<?= $this->Form->input('comentarios', array(
			'label'=>false
			)) ?> 
		</div>
	</div>
<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>


<script type="text/javascript">
	$(document).ready(function(){
		$(".date").datepicker({
			dateFormat: 'yy-mm-dd'
		});
	});
</script>

<!-- ################ -->
<!--
<div class="scheduledExams form">
<?php echo $this->Form->create('ScheduledExam'); ?>
	<fieldset>
		<legend><?php echo __('Add Scheduled Exam'); ?></legend>
	<?php
		echo $this->Form->input('role_id');
		echo $this->Form->input('fecha_programada');
		echo $this->Form->input('fecha_limite');
		echo $this->Form->input('estatus');
		echo $this->Form->input('titulo');
		echo $this->Form->input('comentarios');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scheduled Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->