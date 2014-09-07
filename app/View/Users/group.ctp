<?php $this->layout = 'agile'; ?>



<style type="text/css">
	/*media querys*/
@media (max-width: 500px) {
  .truncate-15 {
    width: 5em;
  }
}

@media (max-width: 950px) {
  .truncate-15 {
    width: 6em;
  }
}
</style>
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / <?= $grupo ?></span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
		    <i class="fa fa-group"></i> <?= $grupo ?>
			
			<?php if($pendientes > 0): ?>
			<span class="badge badge-red"><?= $pendientes ?></span>
			<?php endif ?>

		    <span class="caret"></span>

		  </button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation">
					<?php $url_group = $this->Html->url(array(
							'controller'=>'users',
							'action'=>'group', 'pendientes'
						)); ?>
					<a href="<?= $url_group ?>" role="menuitem" tabindex="-1">
						Pendientes de autorizar
						&nbsp;
						<?php if($pendientes > 0): ?>
						<span class="badge badge-red"><?= $pendientes ?></span>
						<?php endif ?>
					</a>
				</li>
				<li role="presentation">
					<?php $url_group = $this->Html->url(array(
							'controller'=>'users',
							'action'=>'group', 'nuevos'
						)); ?>
					<a href="<?= $url_group ?>" role="menuitem" tabindex="-1">
						Nuevos
						&nbsp;
						<?php if($nuevos > 0): ?>
						<span class="badge badge-red"><?= $nuevos ?></span>
						<?php endif ?>
					</a>
				</li>
				<?php foreach($grupos as $k=>$v): ?>
					<li role="presentation">
						<?php $url_group = $this->Html->url(array(
							'controller'=>'users',
							'action'=>'group', $v
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_group ?>">
						<?= ucwords($v)?>
						</a>
					</li>
				<?php endforeach ?>
				
				
			</ul>
		</div>
		<?php $add_user_url = $this->Html->url(array(
			'controller'=>'users',
			'action'=>'add'
		)); ?>

		<a href="<?= $add_user_url ?>" class="btn btn-primary btn-sm"> 
			<i class="fa fa-plus"></i> Nuevo Usuario
		</a>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-12">
		<table class="table">
		<tr>
					<th class="width-50px">
						
					</th>
					<th class="text-center">
						<i class="fa fa-user"></i>
						<br>
						Nombre de Usuario
					</th>
					<th class="text-center">
						<i class="fa fa-tag"></i>
						<br>
						Nombre Completo
					</th>
					<th class="text-center">
						<i class="fa fa-envelope"></i>
						<br>
						Correo Electronico
					</th>
					<th class="text-center">
						<i class="fa fa-paste"></i>
						<br>
						Opciones
					</th>
		</tr>
		<?php foreach ($users as $user): ?>
	<tr>
		<td>
			<?= $this->element('avatar_user', array(
			    'custom_user'=>$user['User'],
			    'opciones'=>array(
			        'class'=>'user-avatar ' ,

			        )
			)) ?>
		</td>
		<td >
			<div class="truncate truncate-15 center-div">
				<?php echo $user['User']['username']; ?>
			</div>
		</td>
		<td >
			<div class="truncate truncate-15 center-div">
				<?php echo $user['User']['nombre_completo']; ?>
			</div>
		</td>
		<td >
			<div class="truncate truncate-15 center-div">
				<?php echo $user['User']['email']; ?>
			</div>
		</td>

		<td class="text-center">
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
			    <i class="fa fa-tasks"></i>
			    <span class="caret"></span>
			  </button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'users',
							'action'=>'view', $user['User']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Ver
						</a>
					</li>

					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'users',
							'action'=>'edit', $user['User']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Editar
						</a>
					</li>

					<li role="presentation">
						<?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array(
						'role'=>'menuitem',
						'tabindex'=>'-1',
						'escape'=>false), 
						__('Are you sure you want to delete # %s?', 
						$user['User']['id'])) ?>
					</li>
					
				</ul>
			</div>

		<!-- 
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $user['User']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $user['User']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> -->
		</td>
	</tr>
<?php endforeach; ?>

	<tr>
		<td colspan="5">
			<div class="row">
				<div class="col-md-4">
					<?php
						echo $this->Paginator->counter(array(
							'format' => __('Pagina {:page} de {:pages}')
							)); 
?>					</div>
				<div class="col-md-8">
					<div class="paging">
					<div class="button-group float-right">
						<?php
	echo $this->Paginator->prev(__('<i class="fa fa-backward"></i>'), array('class'=>'btn primary-bg', 'escape'=>false), null, array('class' => 'prev disabled btn primary-bg', 'escape'=>false));
	echo $this->Paginator->numbers(array('separator' => '', 'class'=>'btn primary-bg', 'modulus'=>4));
	echo $this->Paginator->next(__('<i class="fa fa-forward"></i>'), array(
										'class'=>'btn primary-bg', 'escape'=>false
										), null, array('class' => 'next disabled btn primary-bg', 'escape'=>false));
?>
					</div>
					</div>
				</div>
			</div>
		</td>
	</tr>
		
		</table>
	</div>
</div>