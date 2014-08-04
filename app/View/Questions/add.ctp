<style type="text/css">
	.label{
		font-weight: bold;
		font-size: 1.5em;
		margin-left: 0px;
		padding-left: 0px !important;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#QuestionQuestionCategoryId").chosen({
			'width':'100px'
		});
		$("#QuestionQuestionTypeId").chosen({
			'width':'100px'
		});
	});
</script>

<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Agregar Pregunta'); ?>       	       
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
		),
	'enctype'=>'multipart/form-data'
)); ?>

<div class="dropzone-previews"></div>

<div class="form-row">
			<div class="form-input col-md-12">		 <?= $this->Form->input('question', array(
			'label'=>array(
				'text'=>'Desarrolla tu Pregunta',
				'class'=>'text-transform-cap '
				),
			'required'=>true,
			'class'=>'form-control'
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-input col-md-12">		 <?= $this->Form->input('question_category_id', array(
			'label'=>array(
				'text'=>'Selecciona una Categoria para tu pregunta',
				'class'=>'text-transform-cap '
				),
			'required'=>true,
			'empty'=>''
			)) ?> 
	</div>
</div>		

<div class="form-row">
			<div class="form-input col-md-12">		 
			<?= $this->Form->input('question_type_id', array(
			'label'=>array(
				'text'=>'Selecciona un tipo de pregunta',
				'class'=>'text-transform-cap '
				),
			'required'=>true,
			'empty'=>''
			)) ?> 
	</div>
</div>	

<br>

<button class="btn large primary-bg submit" type="submit">Guardar <i class="fa fa-save"></i></button>

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
		echo $this->Form->input('question_category_id');
		echo $this->Form->input('imagen');
		echo $this->Form->input('Exam');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Question Categories'), array('controller' => 'question_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Category'), array('controller' => 'question_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->