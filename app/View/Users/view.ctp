<?php $this->layout = 'agile'; ?>

<div class="profile-box bg-white content-box">
	<div class="content-box-header clearfix">
		<div class="col-md-6">
			<a href="javascript:;" onclick="$('#white-modal-80').removeClass('hide');" class="white-modal-80 float-left">
				<?= $this->element('avatar_user', array(
					'custom_user'=>$user['User']
				)); ?>
			</a>
			

			
			<?php if($this->params['action'] == 'profile' ): ?>
				<div class="hide" id="white-modal-80" title="Carga Imagen de Perfil">
				    <div class="pad10A">


					<?= $this->Form->create('uploadImage', array(
						'class'=>'dropzone'
					)) ?>
						
					<?= $this->Form->input('user_id', array(
						'type'=>'hidden',
						'value'=> $this->Session->read()['Auth']["User"]['id']
					)) ?>
					
					<?= $this->Form->end() ?>
					<br>
					<!-- <button id="upload_image_btn" class="btn primary-bg">Guardar</button> -->

				    </div>
				</div>
			<?php endif ?>

			<div class="user-details float-left">
				<?= ucwords($user['User']['nombre_completo']) ?>
				<span><?= ucwords($user['User']['username']) ?></span>
			</div>
		</div>

		<div class="col-md-6">
			<?php $url_edit = $this->Html->url(array(
				'action'=>'edit', $user['User']['id']
			)); ?>
			<a href="<?= $url_edit ?>" class="btn btn-info float-right"><i class="fa fa-gear" title="Editar Perfil"></i></a>
			</div>
	</div>

	<div class="nav-list-horizontal clearfix nav-list-3 nav-list-horizontal-alt">
		<div class="row">
			<?php if($this->params['action'] == 'profile' ): ?>
			<div class="col-md-12">
				<a href="javascript:;" onclick="$('#white-modal-80').removeClass('hide');" class="white-modal-80 float-left btn btn-default">
					Cambiar Imagen de Perfil
				</a>
				<br><br>
			</div>
			<?php endif ?>
			<div class="col-md-12">
				<label for="email"> <i class="fa fa-envelope"></i> Correo Electronico:</label>
				<span id="email"><?= $user['User']['email'] ?></span>
			</div>
			<div class="col-md-12">
				<label for="fecha_registro"><i class="fa fa-calendar"></i> Fecha de Registro</label>
				<span id="fecha_registro"><?= date('d M Y', strtotime($user['User']['fecha_registro'] )) ?></span>
			</div>
			<div class="col-md-12">
				<label for="nacionalidad"><i class="fa fa-flag"></i> Nacionalidad</label>
				<span id="nacionalidad"><?= $user['User']['nacionalidad'] ?></span>
			</div>
			<div class="col-md-12">
				<label for="nacionalidad"><i class="fa fa-bullseye"></i> Sexo</label>
				<span id="nacionalidad"><?= $user['User']['sexo'] ?></span>
			</div>
			<div class="col-md-12">
				<label for="hospital"><i class="fa fa-h-square"></i> Hospital</label>
				<span id="hospital"><?= $user['User']['hospital'] ?></span>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<?php if($user['User']['activo'] == false && $is_admin): ?>
					<div class="button-group">
						<?php $aprobar_url = $this->Html->url(array(
							'action'=>'aprobe', $user['User']['id']
						)); ?>
						<a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
						<a href="<?= $aprobar_url ?>" class="btn btn-success">Aprobar Usuario <i class="fa fa-check"></i></a>
					</div>
				<?php else: ?>
					<!-- <div class="btn btn-success"><i class="fa fa-check"></i> Usuario Activo</div> -->
					<?php $user_profle = $this->Html->url(array(
						'controller'=> str_replace(' ', '-', trim($user['User']['username']))
					)); ?>
					<a href="<?= $user_profle ?>" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Ver Perfil</a>
				<?php endif ?>
			</div>
			
		</div>
		<!-- <ul class="row">
			<li>
				<a title="" class="hover-white" href="javascript:;">
					<i class="glyph-icon font-purple icon-dashboard"></i>
					Dashboard
				</a>
			</li>
			<li>
				<a title="" class="hover-white" href="javascript:;">
					<i class="glyph-icon font-orange icon-picture-o"></i>
					Gallery
				</a>
			</li>
			<li>
				<a title="" class="hover-white" href="javascript:;">
					<i class="glyph-icon font-blue-alt icon-map-marker"></i>
					Location
				</a>
			</li>
		</ul> -->
	</div>

</div>





<script type="text/javascript">
		
	$(document).ready(function(){
		Dropzone.options.uploadImageProfileForm = { // The camelized version of the ID of the form element

		  // The configuration we've talked about above
		  // autoProcessQueue: false,
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

		    // First change the button to actually tell Dropzone to process the queue.
		    // $("#upload_image_btn").on("click", function(e) {
		    //   // Make sure that the form isn't actually being sent.
		    //   e.preventDefault();
		    //   e.stopPropagation();
		    //   myDropzone.processQueue();

		    // });
		  }

		};
	});

</script>

<!-- <div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>
				<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Username'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Password'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Email'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div> -->



<!-- <div class="related">
	<?php if (!empty($user['UserAnswer'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="10">
					<?php echo __('Related User Answers'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Exam Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Pregunta'); ?></th>
		<th><?php echo __('Respuesta'); ?></th>
		<th><?php echo __('Correcta'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserAnswer'] as $userAnswer): ?>
		<tr>
			<td><?php echo $userAnswer['id']; ?></td>
			<td><?php echo $userAnswer['user_exam_id']; ?></td>
			<td><?php echo $userAnswer['user_id']; ?></td>
			<td><?php echo $userAnswer['question_id']; ?></td>
			<td><?php echo $userAnswer['answer_id']; ?></td>
			<td><?php echo $userAnswer['pregunta']; ?></td>
			<td><?php echo $userAnswer['respuesta']; ?></td>
			<td><?php echo $userAnswer['correcta']; ?></td>
			<td><?php echo $userAnswer['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_answers', 'action' => 'view', $userAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_answers', 'action' => 'edit', $userAnswer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_answers', 'action' => 'delete', $userAnswer['id']), array(), __('Are you sure you want to delete # %s?', $userAnswer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>
<div class="related">
	<?php if (!empty($user['Role'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="3">
					<?php echo __('Related Roles'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div> -->
<br>



<!-- ############# -->

<!--
<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related User Answers'); ?></h3>
	<?php if (!empty($user['UserAnswer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Exam Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Pregunta'); ?></th>
		<th><?php echo __('Respuesta'); ?></th>
		<th><?php echo __('Correcta'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserAnswer'] as $userAnswer): ?>
		<tr>
			<td><?php echo $userAnswer['id']; ?></td>
			<td><?php echo $userAnswer['user_exam_id']; ?></td>
			<td><?php echo $userAnswer['user_id']; ?></td>
			<td><?php echo $userAnswer['question_id']; ?></td>
			<td><?php echo $userAnswer['answer_id']; ?></td>
			<td><?php echo $userAnswer['pregunta']; ?></td>
			<td><?php echo $userAnswer['respuesta']; ?></td>
			<td><?php echo $userAnswer['correcta']; ?></td>
			<td><?php echo $userAnswer['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_answers', 'action' => 'view', $userAnswer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_answers', 'action' => 'edit', $userAnswer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_answers', 'action' => 'delete', $userAnswer['id']), array(), __('Are you sure you want to delete # %s?', $userAnswer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($user['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->
