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
			'width':'90%'
		});

		$("#QuestionQuestionTypeId").chosen({
			'width':'90%'
		});
	});
</script>


<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Preguntas / Editar de Pregunta</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
		  <li class="active"><a href="#question" role="tab" data-toggle="tab">Datos de la Pregunta</a></li>
		  <li><a href="#answers" role="tab" data-toggle="tab">Respuestas</a></li>
		  <li><a href="#image" role="tab" data-toggle="tab">Imagen</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="question">
		  	<?php echo $this->Form->create('Question', array(
		  		'inputDefaults'=>array(
		  			'div'=>false
		  			),
		  		'enctype'=>'multipart/form-data'
		  	)); ?>

		  	<p>
		  		<?= $this->Form->input('question', array(
		  		'label'=>array(
		  			'text'=>'Desarrolla tu Pregunta',
		  			'class'=>'text-transform-cap'
		  			),
		  		'required'=>true,
		  		'class'=>'form-control width-12'
		  		)) ?> 
		  	</p>

		  	<p>
		  		<?= $this->Form->input('question_category_id', array(
		  		'label'=>array(
		  			'text'=>'Selecciona una Categoria para tu pregunta',
		  			'class'=>'text-transform-cap label-up'
		  			),
		  		'required'=>true,
		  		'class'=>''
		  		)) ?> 
		  	</p>

		  	<p>
		  		<?= $this->Form->input('question_type_id', array(
		  		'label'=>array(
		  			'text'=>'Selecciona un tipo de pregunta',
		  			'class'=>'text-transform-cap '
		  			),
		  		'required'=>true
		  		)) ?> 

		  	</p>


		  	<br>

		  	<div class="button-group">
		  		<button class="btn primary-bg submit" type="submit">Guardar <i class="fa fa-save"></i></button>
		  	</div>

		  	<?php echo $this->Form->end(); ?>
		  </div>
		  <div class="tab-pane" id="answers">
		  	<br>
		  	<?php switch($this->request->data['Question']['question_type_id']): 
		  		case 1:?>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<?php $add_url = $this->Html->url(array(
		  						'controller'=>'answers',
		  						'action'=>'add', $this->request->data['Question']['id']
		  					)) ?>
		  					<a title="Agregar Respuesta" class="btn btn-primary btn-sm" href="<?= $add_url ?>">
		  					    <i class="fa fa-plus"></i> Agregar Respuesta
		  					</a>
		  				</div>
		  			</div>
		  			<br><br>
		  			<table class="table table-hover">
		  				<thead>
		  					<tr>
		  						<th colspan="3">Respuestas</th>
		  					</tr>
		  				</thead>
		  				<tbody>
		  					<?php foreach($this->request->data['Answer'] as $answer): ?>
		  						<tr>
		  							<td><?= $answer['answer'] ?></td>
		  							<td><?= ($answer['answer_is_ok'] == true)?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' ?>
		  							</td>
		  							<td>
		  								<div class="dropdown">
		  								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
		  								    Opciones
		  								    <span class="caret"></span>
		  								  </button>
		  								  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		  								  	<?php $ver_url = $this->Html->url(array(
		  								  		'controller'=>'answers',
		  								  		'action' => 'view', $answer['id'])); ?>
		  								  	<?php $edt_url = $this->Html->url(array(
		  								  		'controller'=>'answers',
		  								  		'action' => 'edit', $answer['id'])); ?>


		  								    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= $ver_url ?>">Ver</a></li>
		  								    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= $edt_url ?>">Editar</a></li>
		  								    <li role="presentation"><?= $this->Form->postLink(__('Eliminar'), array('action' => 'remove', 
		  								    		$answer['id'],
		  								    		$this->request->data['Question']['id']
		  								    	 ), array( 
		  								    	'escape'=>false,
		  								    	'role'=>'menuitem',
		  								    	'tabindex'=>"-1"
		  								    	), __('Seguro que deseas eliminar la respuesta?', $answer['id']));  ?></li>
		  								  </ul>
		  								</div>
		  							</td>
		  						</tr>
		  					<?php endforeach ?>
		  				</tbody>
		  			</table>
		  			<!--  -->

		  		<?php break; ?>
		  		<?php case 2: ?>
		  		<?php //pr($this->request->data); ?>
		  		<div class="divider"></div>

		  		<h3>Preguntas relacionadas</h3>
		  		<?php $add_question_url = $this->Html->url(array(
		  			'controller'=>'question_questions',
		  			'action'=>'add', $this->request->data['Question']['id']
		  		)); ?>
		  		<a href="<?= $add_question_url ?>" class="btn primary-bg"><i class="fa fa-plus"></i> Agregar Pregunta</a>
		  			<table class="table">
		  				<thead>
		  					<tr>
		  						<th>ID</th>
		  						<th>Pregunta</th>
		  						<th>Respuesta</th>
		  					</tr>
		  				</thead>
		  				<tbody>
		  					<?php foreach($this->request->data['QuestionQuestion'] as $question): ?>
		  					<tr>
		  						<td><?= $question['ChildQuestion']['id'] ?></td>
		  						<td><?= $question['ChildQuestion']['question'] ?></td>
		  						<td>
		  							<?php foreach($question['ChildQuestion']['Answer'] as $answer): ?>
		  								<?php if($answer['answer_is_ok'] == true): ?>
		  									<?= $answer['answer'] ?>
		  									<?php break; ?>
		  								<?php endif ?>
		  							<?php endforeach ?>
		  						</td>
		  					</tr>
		  					<?php endforeach ?>
		  				</tbody>
		  			</table>
		  		<?php break; ?>
		  		<?php case 3: ?>
		  			<!-- Pregunta Abierta -->

		  		<?php break; ?>
		  	<?php endswitch; ?>
		  </div>
		  <div class="tab-pane" id="image">
		  	<br>
		  	<a href="#" class="btn primary-bg white-modal-60" onclick="$('#white-modal-60').removeClass('hide');"> <i class="fa fa-image"></i> <?= ($this->request->data['Question']['imagen'] == '')?'Agregar':'Cambiar' ?> Imagen</a>
		  	
		  	<!-- Dialogos -->
		  	<div class="hide" id="white-modal-60" title="Cargar imagen" style="top:0px">
		  	    <div class="pad10A">
		  	    	<?= $this->Form->create('questions', array(
		  	    		'class'=>'dropzone', 
		  	    		'action'=>'/uploadImage/' . $this->request->data['Question']['id'],
		  	    		'id'=>'UploadForm'
		  	    	)) ?>
		  	    	<?= $this->Form->end() ?>
		  	    </div>
		  	</div>
		  	<!--  -->

		  	<div class="col-md-12">
				<div class="divider"></div>
			</div>

			<div class="col-md-12">
				<?= $this->Html->image('question-images/' . $this->request->data['Question']['imagen'], array(
					'height' => '300'
				)) ?>
			</div>
		  </div>
		</div>
	</div>
</div>

<br><br>
<?php $back_url = $this->Html->url(array(
	'controller'=>'Questions',
	'action'=>'index'
));?>
<a href="<?= $back_url ?>" class="btn bg-gray"><i class="fa fa-arrow-left"></i> Regresar</a>





<script type="text/javascript">
	$(document).ready(function(){
		Dropzone.options.UploadForm = {
			uploadMultiple: false,
			parallelUploads: 1,
			maxFiles: 1,
			dictDefaultMessage: 'Arrastra una imagen a esta zona',
			addRemoveLinks: true,
			dictRemoveFile: 'Quitar',
			success: function(e, response){
				location.reload();
			},
			maxfilesexceeded: function(file){
				alert("Has cargado mas de una imagen, solo la primera imagen sera cargada a tu perfil.");
			},

			// The setting up of the dropzone
			init: function() {
			  var myDropzone = this;
			}
		}
	});
</script>

