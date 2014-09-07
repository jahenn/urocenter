<div class="row">
	<div class="col-md-12">
		<span class="font-size-20">
			<?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Examen Aleatorio
		</span>
	<div class="divider"></div>
	</div>
</div>


<div class="row">
	<div class="col-md-11">
		<?= $this->Form->create('random_exam') ?>

		<?= $this->Form->input('question_category_id', array(
			'div'=>'false',
			'class'=>'form-control',
			'label'=>'Selecciona una Categoria'
		)) ?>
		<?= $this->Form->input('question_difficulty_id', array(
			'div'=>'false',
			'class'=>'form-control',
			'label'=>'Selecciona un Nivel de Dificultad',
			'style'=>'width: 120px;'
		)) ?>

		<?= $this->Form->input('cantidad', array(
			'div'=>'false',
			'class'=>'form-control',
			'label'=>'Cantidad de Preguntas',
			'type'=>'number',
			'style'=>'width: 120px;'
		)) ?>
	</div>
</div>





<br>
<br>

<button type="submit" class="btn btn-primary">Generar</button>

<?= $this->Form->end() ?>