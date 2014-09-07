
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Ver Grupo</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<h3><?php echo ucwords(h($role['Role']['nombre'])); ?></h3>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<h4>Lista de Usuarios</h4>
	</div>
	<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>
						Nombre de Usuario
					</th>
					<th>Nombre Completo</th>
					<th>Correo Electronico</th>
					<th>Hospital</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($role['User'] as $user): ?>
					<tr>
						<td><?= $user['username'] ?></td>
						<td><?= $user['nombre_completo'] ?></td>
						<td><?= $user['email'] ?></td>
						<td><?= $user['hospital'] ?></td>

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<!-- 
<?php pr($role); ?> -->