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
	});
</script>

<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Edicion de Pregunta'); ?>       	       
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


<div class="form-row">
			<div class="form-input col-md-12">		 <?= $this->Form->input('question', array(
			'label'=>array(
				'text'=>'Desarrolla tu Pregunta',
				'class'=>'text-transform-cap label'
				),
			'required'=>true
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-input col-md-12">		 <?= $this->Form->input('question_category_id', array(
			'label'=>array(
				'text'=>'Selecciona una Categoria para tu pregunta',
				'class'=>'text-transform-cap label'
				),
			'required'=>true,
			'empty'=>''
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-input col-md-12">		 <?= $this->Form->input('imagen', array(
			'label'=>array(
				'text'=>'Agrega una Imagen',
				'class'=>'text-transform-cap label'
				),
			'type'=> 'file'
			)) ?> 
	</div>
</div>	


<div class="row">
	<div class="col-md-12">
		<?= $this->Html->image('question-images/' . $this->request->data['Question']['imagen'], array(
			'width' => '100'
		)) ?>
	</div>
</div>	



<br>

<div class="button-group">
	<?php $back_url = $this->Html->url(array(
		'controller'=>'Questions',
		'action'=>'index'
	));?>
	<a href="<?= $back_url ?>" class="btn large bg-gray"><i class="fa fa-arrow-left"></i> Regresar</a>

	<button class="btn large primary-bg submit" type="submit">Guardar <i class="fa fa-save"></i></button>
</div>

<?php echo $this->Form->end(); ?>
<br>


<div class="content-box">
    <h3 class="content-box-header primary-bg">
        <span class="float-left">Respuestas Asignadas</span>
        <?php $add_url = $this->Html->url(array(
        	'controller'=>'answers',
        	'action'=>'add', $this->request->data['Question']['id']
        )) ?>
        <a title="Agregar Respuesta" class="float-right icon-separator btn" href="<?= $add_url ?>">
            <i class="glyph-icon icon-toggle icon-plus"></i>
        </a>
    </h3>
    <div class="content-box-wrapper">

        <div class="row clearfix">
        	<div class="col-md-12">
        		<table class="table">
        			<thead>
        				<tr>
        					<th>ID</th>
        					<th>Respuesta</th>
        					<th>Correcta</th>
        					<th>&nbsp;</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php foreach($this->request->data['Answer'] as $answer): ?>
        					<tr>
        						<td class="text-center"><?= $answer['id'] ?></td>
        						<td class="text-center col-md-12"><?= $answer['answer'] ?></td>
        						<td class="text-center"><?= ($answer['answer_is_ok'] == true)?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' ?>
        						</td>
        						<td>
        							<div class="btn button-group">
        								<?php $delete_url = $this->Html->url(array(
        									'controller'=>'Answers',
        									'action'=>'delete',
        									$answer['id'], $this->request->data['Question']['id']
        								)); ?>
        								<a href="<?= $delete_url ?>" class="btn primary-bg"><i class="fa fa-times"></i> Eliminar</a>
        							</div>
        						</td>
        					</tr>
        				<?php endforeach ?>
        			</tbody>
        		</table>  
        	</div>            	
        </div>

    </div>
</div>



