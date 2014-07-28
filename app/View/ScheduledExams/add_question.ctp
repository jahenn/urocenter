<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo 'Agregar Pregunta a Examen'; ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>



<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('question_category_id', array(
			'div'=>false,
			'label'=>'Selecciona una Categoria',
			'options'=>$question_categories,
			'default'=>'',
			'empty'=>'--'
		)) ?>
	</div>
</div>

<br>

<?= $this->Form->create('Question') ?>

<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('question_id', array(
			'div'=>false,
			'label'=>'Selecciona una Pregunta',
			'empty'=>'--',
			'required'=>true
		)) ?>
	</div>
</div>
<br>
<button type="submit">Guardar</button>

<?= $this->Form->end() ?>




<script type="text/javascript">
	$(document).ready(function(){
		$("#question_category_id").chosen();
		$("#QuestionQuestionId").chosen();



		$("#question_category_id").change(function(){
			$("#QuestionQuestionId").chosen('destroy');
			var url = "<?= $this->Html->url(array('controller'=>'questions', 'action'=>'json'), true) ?>";
			url = url + '/' + $("#question_category_id").val();
			$.getJSON(url, function(data) {
			    $("#QuestionQuestionId option").remove(); // Remove all <option> child tags.
			    $.each(data, function(index, item) { // Iterates through a collection
			        $("#QuestionQuestionId").append( // Append an object to the inside of the select box
			            $("<option></option>") // Yes you can do this.
			                .text(item.nombre)
			                .val(item.valor)
			        );
			    });

			    $("#QuestionQuestionId").chosen();
			});
		});
	});
</script>