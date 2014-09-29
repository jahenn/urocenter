<style type="text/css">
	label{
		display: block;
	}
	#QuestionQuestionDifficultyId{
		display: inline-block !important;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#QuestionQuestionCategoryId").chosen({
			'width':'100%'
		});
		// $("#QuestionQuestionTypeId").chosen({
		// 	'width':'100%'
		// });

		$("#QuestionQuestionDifficultyId option").each(function(){
			var i = $('<i class="fa fa-check"></i> &nbsp;');
			//alert($(this).val());
			switch($(this).val())
			{
				case '1':
					$(i).css('color', 'green');
					break;
				case '2':
					$(i).css('color', 'blue');
					break;

				case '3':
					$(i).css('color', 'orange');
					break;

				case '4':
					$(i).css('color', 'red');
					break;


			}

			$(this).prepend(i);
		});

		$("#QuestionQuestionDifficultyId").change(function(){
			switch($(this).val())
			{
				case '1':
					$(".dif").css('color', 'green');
					break;
				case '2':
					$(".dif").css('color', 'blue');
					break;

				case '3':
					$(".dif").css('color', 'orange');
					break;

				case '4':
					$(".dif").css('color', 'red');
					break;
				default:
					$(".dif").css('color', 'white');
					break;

			}
		});

		$("#QuestionAddForm").submit(function(e){
			if($("#QuestionQuestion").val() == '')
			{
				alert("Ingresa una pregunta valida");
				$("#QuestionQuestion").focus();
				e.preventDefault();
				return false;
			}

			if($("#QuestionQuestionCategoryId").val() == '')
			{
				alert("Ingresa una categoria valida");
				$("#QuestionQuestionCategoryId").focus();
				e.preventDefault();
				return false;
			}
			if($("#QuestionQuestionTypeId").val() == '')
			{
				alert("Ingresa un tipo de pregunta valido");
				$("#QuestionQuestionTypeId").focus();
				e.preventDefault();
				return false;
			}
			if($("#QuestionQuestionDifficultyId").val() == '')
			{
				alert("Ingresa un nivel de Dificultad valido");
				$("#QuestionQuestionDifficultyId").focus();
				e.preventDefault();
				return false;
			}
			if($("#QuestionReferencias").val() == '')
			{
				alert("Ingresa referencias bibliograficas y/o datos sobre la pregunta");
				$("#QuestionReferencias").focus();
				e.preventDefault();
				return false;
			}


		});
	});
</script>

<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Nueva Pregunta</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>

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
			'required'=>false,
			'class'=>'form-control width-100'
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-input col-md-12">		 
			<?= $this->Form->input('question_category_id', array(
			'label'=>array(
				'text'=>'Selecciona una Categoria para tu pregunta',
				'class'=>'text-transform-cap width-100'
				),
			'required'=>false,
			'empty'=>''
			)) ?> 
	</div>
</div>		

<div class="form-row hidden">
			<div class="form-input col-md-12">		 
			<?= $this->Form->input('question_type_id', array(
			'label'=>array(
				'text'=>'Selecciona un tipo de pregunta',
				'class'=>'text-transform-cap '
				),
			'required'=>false,
			'empty'=>'',
			'default'=>1
			)) ?> 
	</div>
</div>	

<div class="row hidden">
	<div class="col-md-12">
		<?= $this->Form->input('question_difficulty_id', array(
			'class'=>'form-control',
			'label'=> array(
				'text'=>'Nivel de Dificultad',
				'class'=>'text-transform-cap'
				),
			'empty'=>'Selecciona una Opción',
			'default'=>1
		)) ?>
		<i class="fa fa-question font-size-20 dif" style="color: white;"></i>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<?= $this->Form->input('referencias', array(
			'class'=>'form-control width-100',
			'label'=> array(
				'text'=>'Referencias / Bibliografia',
				'class'=>'text-transform-cap'
				)
		)) ?>
	</div>
</div>

<br>

<h3>Respuestas</h3>

<div class="answers">
	<table class="table no-border">
		<thead>
			<tr>
				<th>Desarrollo de la respuesta</th>
				<th>Es Correcta?</th>
			</tr>
			<?php for($i=0; $i<5; $i++): ?>
			<tr>
				<td>
					<input type="text" class="form-control width-100" name="data[answers][<?= $i ?>][answer]">
				</td>
				<td>
					<input type="checkbox" name="data[answers][<?= $i ?>][isOK]">
				</td>
			</tr>
			<?php endfor ?>
		</thead>
	</table>
</div>

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