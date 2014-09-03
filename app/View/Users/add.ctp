<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Agregar Usuario</span class="font-size-20">
			<hr>
	</div>
</div>

<?php echo $this->Form->create('User', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>

<p>
	 <?= $this->Form->input('username', array(
		'label'=>'Nombre de Usuario',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	 <?= $this->Form->input('nombre', array(
		'label'=>'Nombre',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	 <?= $this->Form->input('Apellido', array(
		'label'=>'Apellido',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	 <?= $this->Form->input('password', array(
		'label'=>'Contraseña',
		'class'=>'form-control width-12'
		)) ?> 
</p>

<p>
	<?= $this->Form->input('email', array(
		'label'=>'Correo Electronico',
		'class'=>'form-control width-12'
		)) ?> 
</p>


<br>
<h4>Grupos</h4>
<?= $this->Form->input('Role', array(
	'label'=>false
	)) ?> 


<br>

<button class="btn btn-primary submit" type="submit"><i class="fa fa-save"></i> Guardar</button>


<?= $this->Form->input('fecha_registro', array(
	'type'=>'hidden',
	)) ?>


<?php echo $this->Form->end(); ?>
<br>
<br>


<script type="text/javascript">
	
	$(document).ready(function(){
		//alert("ok");
		$("#RoleRole").multiSelect();
	});

</script>

