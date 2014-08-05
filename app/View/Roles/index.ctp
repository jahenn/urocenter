<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Grupos</span class="font-size-20">
	<!-- <div class="divider"></div> -->
	<br><br>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?php $add_group_url = $this->Html->url(array(
			'controller'=>'roles',
			'action'=>'add'
		)); ?>

		<a href="<?= $add_group_url ?>" class="btn btn-primary btn-sm"> 
			<i class="fa fa-plus"></i> Nuevo Grupo
		</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<!-- <thead>
				<tr>
					<th colspan="4" class="text-left pad5A">
						<div class="button-group">
							<?php echo $this->Html->link(__('New Role'), array('action' => 'add'), array(
								'class'=>'btn medium primary-bg'
							)); ?>							
									<?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>

						</div>
					</th>
				</tr>
			</thead> -->
		<tr>
					<th class="text-center">
						<i class="fa fa-group"></i>
						<br>
						Nombre del Grupo
					</th>
					<th class="text-center">
						<i class="fa fa-paste"></i>
						<br>
						Opciones
					</th>
		</tr>
		<?php foreach ($roles as $role): ?>
	<tr>
		<td class="text-center"><?php echo ucwords($role['Role']['nombre']); ?></td>
		<td class="text-center">
			
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
			    <i class="fa fa-tasks"></i>
			    <span class="caret"></span>
			  </button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'roles',
							'action'=>'view', $role['Role']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Ver
						</a>
					</li>

					<?php if($role['Role']['id'] != 5 && $role['Role']['id'] != 6): ?>
					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'roles',
							'action'=>'edit', $role['Role']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Editar
						</a>
					</li>

					<li role="presentation">
						<?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $role['Role']['id']), array(
						'role'=>'menuitem',
						'tabindex'=>'-1',
						'escape'=>false), 
						__('Seguro que deseas eliminar el grupo?', 
						$role['Role']['id'])) ?>
					</li>
					
					<?php endif; ?>
				</ul>	
			</div>

		<!-- 
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $role['Role']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $role['Role']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $role['Role']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> -->
		</td>
	</tr>
<?php endforeach; ?>
		<tr>
			<td colspan="4">
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
		echo $this->Paginator->prev(__('<i class="fa fa-backward"></i>'), array('class'=>'btn btn-primary', 'escape'=>false), null, array('class' => 'prev disabled btn btn-primary', 'escape'=>false));
		echo $this->Paginator->numbers(array('separator' => '', 'class'=>'btn btn-primary', 'modulus'=>4));
		echo $this->Paginator->next(__('<i class="fa fa-forward"></i>'), array(
											'class'=>'btn btn-primary', 'escape'=>false
											), null, array('class' => 'next disabled btn btn-primary', 'escape'=>false));
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