<?php $this->layout = 'agile_blank'; ?>


<?= $this->Html->Image('logo.png', array(
	'width'=>'600'
)) ?>

<h3>Registro de Usuarios</h3>


<?php echo $this->Form->create('User', array(
	'inputDefaults'=>array(
		'div'=>false
		),
	'action'=>'add'
)); ?>

<div class="row">
	<div class="col-md-12">
		<?= $this->Form->input('username', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Nombre de Usuario',
					'autocomplete'=>'off',
					'required'=>true

					)) ?> 
		<?= $this->Form->input('password', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Contraseña',
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 

		<?= $this->Form->input('email', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Correo Electronico',
					'type'=>'email',
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 
	</div>

</div>

<div class="row">
	<div class="col-md-6">
		<?= $this->Form->input('nombre', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Nombre',
					'autocomplete'=>'off',
					'required'=>true
					)) ?>
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('apellido', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Apellido',
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('nacionalidad', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Nacionalidad',
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 
	</div>
	<div class="col-md-6">
		<?= $this->Form->input('sexo', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Sexo',
					'options'=>array('H'=>'Hombre', 'M'=>'Mujer'),
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 
	</div>
	<div class="col-md-12">
		<?= $this->Form->input('hospital', array(
					'label'=>false,
					'class'=>'form-control',
					'placeholder'=>'Hospital',
					'autocomplete'=>'off',
					'required'=>true
					)) ?> 
	</div>
</div>


<br>

<button class="btn btn-lg btn-primary" type="submit">Registrarse <i class="fa fa-check"></i></button>
<?= $this->Form->end() ?>



	
