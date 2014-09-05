 <style>
 #sortable, #sortable2 { list-style-type: none; margin: 0; padding: 0; width: 100%; }
 #sortable li , #sortable2 li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 100px; overflow: hidden; }
 #sortable li span, #sortable li span  { position: absolute; margin-left: -1.3em; }


 .content {
 	padding: 20px;
 }
 </style>

 <article>



 	<div class="row">
<!--  		<div class="group1 col-md-6">
 			<?php foreach($this->request->data['Question'] as $question): ?>
 			<a href="#"><i class="fa fa-bookmark"></i> <?= $question['QuestionCategory']['nombre'] ?></a>
 		<?php endforeach ?>
 	</div> -->
 	<?php $fecha = new DateTime($this->request->data['ScheduledExam']['fecha_programada']); ?>
 	<div class="col-md-6">
 		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Resolver Examen</span class="font-size-20">
 			<!-- <div class="divider"></div> -->
 		</div>
 		<div class="col-md-6">
 			<div class="float-right">
 				<i class="fa fa-clock-o"></i>
 				Fecha Programada
 				<span class="font-blue-alt"><?= $fecha->format('d M Y') ?></span>  
 			</div> 
 		</div>
 	</div>

 	<hr>
 </article>


 <!-- <h3>Responder Examen</h3> -->
 <div class="row">
 	<div class="col-md-12">
 		<?= $this->Form->create('answers') ?>
 		<div id="wizard">
 			
 			<!-- <h1><?= $this->request->data['ScheduledExam']['comentarios'] ?></h1> -->
 			<h1></h1>
 			<div>
 				<h3><?= $this->request->data['ScheduledExam']['titulo'] ?></h3>
 				<p>
 					<?= $this->request->data['ScheduledExam']['comentarios'] ?>
 				</p>
 				<p>Para continuar da clic en <b>Siguiente</b></p>
 			</div>

 			<?php $multiple = 0; ?>
 			<?php $columnas=0; ?>

 			<?php foreach($this->request->data['Question'] as $question): ?>

 			<!-- <section class="step" data-step-title="	"> -->
 			<!-- Opcion Multiple -->
 			<?php if($question['question_type_id'] == 1): ?> 
 			<h1></h1>


 			<div>
 				<h3><?= $question['question'] ?></h3>
 				<?php 
 				$file = WWW_ROOT . DS . 'img' . DS . 'question-images' . DS . $question['imagen'];

 				if($question['imagen'] != '' && file_exists($file))
 				{
 					echo $this->Html->image('question-images/' . $question['imagen'], array(
 						'width'=>200,
 						'alt'=>' '
 						));
 				}
 				?>

 				<br><br>
 				<input type="hidden" name="data[Multiple][<?= $multiple ?>][question]"  value="<?= $question['id'] ?>">
 				<ul>

 					<?php foreach($question['Answer'] as $answer): ?>
 					<li>
 						<input class="pull-left" type="radio" name="data[Multiple][<?= $multiple ?>][answer]" value="<?= $answer['id'] ?>"> &nbsp; <label for=""><?= $answer['answer'] ?></label>
 					</li>
 				<?php endforeach ?>
 			</ul>
 			<?php $multiple++; ?>
 		</div>

		
		<!-- Columnas -->
		<?php elseif ($question['question_type_id'] == 2): ?>
			<?php continue; ?>
			<div class="col-md-6">
				<ul id="sortable">
					<?php $iq=0; ?>

					<?php 
					$questions_array = array();

					foreach($question['QuestionQuestion']  as $question_q){
						$questions_array[] = array(
							'id'=>$question_q['ChildQuestion']['id'],
							'question'=> $question_q['ChildQuestion']['question']
							);
					}


					shuffle($questions_array);

					?>


					<?php foreach($questions_array as $q): ?>

					<li class="ui-state-default" title='<?= $q['question'] ?>'>

						<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
						<?= $q['question'] ?>
						<input type="hidden" value="<?= $q['id'] ?>" name="data[Columnas][<?= $columnas ?>][<?= $iq ?>][pregunta][id_pregunta]" nq="<?= $columnas ?>">

					</li>
					<?php $iq++; ?>
				<?php endforeach ?>
			</ul>
		</div>


		<div class="col-md-6">
			<ul id="sortable2">


				<?php 

				$questions_array = array();
				foreach($question['QuestionQuestion'] as $question_q){

					foreach($question_q['ChildQuestion']['Answer'] as $answer){
						if($answer['answer_is_ok'] == true){
							$questions_array[] = array(
								'id'=> $answer['id'],
								'answer'=>  $answer['answer']
								);
						}
					}

					shuffle($questions_array);

				}

				?>


				<?php $iq=0; ?>
				<?php foreach($questions_array as $q): ?>
				<li class="ui-state-default" title="<?= $q['answer'] ?>">

					<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

					<?= $q['answer'] ?>
					<input type="hidden" value="<?= $q['id'] ?>" name="data[Columnas][<?= $columnas ?>][<?= $iq ?>][pregunta][id_respuesta]" nq="<?= $columnas ?>">
				</li>
				<?php $iq++; ?>
			<?php endforeach ?>
		</ul>
		</div>
		<?php $columnas++; ?>



 		
 	<?php endif ?>
 <?php endforeach ?>


</div>
<?= $this->Form->end() ?>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
		// $("#answersResolveForm").easyWizard({
		// 	buttonsClass: 'btn btn-default',
		//     submitButtonClass: 'btn btn-info',
		//     nextButton: 'Siguiente',
		//     prevButton: 'Anterior',
		//     submitButtonText: 'Enviar Examen',
		//     before: function(wizardObj, currentStepObj, nextStepObj) {
		//        // alert('Hello, I\'am the before callback');
		//     },
		//     after: function(wizardObj, prevStepObj, currentStepObj) {
		//         //alert('Hello, I\'am the after callback');
		//     },
		//     beforeSubmit: function(wizardObj) {
		//         //alert('Hello, I\'am the beforeSubmit callback');
		//     }
		// });
 $('#wizard').steps({
 	onFinished: function(){
 		$("#answersResolveForm").submit();
 	}
 });

 $("#sortable").sortable({
 	stop: function(event, ui){
// 				var position = ui.item.find('input').attr('position');
// 				var value = ui.item.find('input').attr('value');
// 				var new_position = ui.item.index();
// alert($("input[position='" + new_position + "']").val());

var i=0;
$("#sortable").find('li').each(function(){
	var p_input = $(this).find('input');

	$(p_input).prop('name', 'data[Columnas][' + $(p_input).attr("nq") + ']['  + i +'][pregunta][id_pregunta]');


					//alert($(p_input).prop('name'));

					i++;
				});

}
});
 $("#sortable").disableSelection();



 $("#sortable2").sortable({
 	stop: function(event, ui){
// 				var position = ui.item.find('input').attr('position');
// 				var value = ui.item.find('input').attr('value');
// 				var new_position = ui.item.index();
// alert($("input[position='" + new_position + "']").val());
var i=0;
$("#sortable2").find('li').each(function(){
	var p_input = $(this).find('input');

	$(p_input).prop('name', 'data[Columnas][' + $(p_input).attr("nq") + ']['  + i +'][pregunta][id_respuesta]');

					//alert($(p_input).prop('name'));

					i++;
				});

}
});
 $("#sortable2").disableSelection();



});
 </script>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <?php 



	//pr($this->request->data);
 ?>
