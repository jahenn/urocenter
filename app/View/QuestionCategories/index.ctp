<div class="row">
    <div class="col-md-12">
        <span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Categorias de Preguntas
        </span>
    </div>
</div>
<div class="divider"></div>

<div class="row">
	<div class="col-md-12">
		<?php echo $this->Html->link('<i class="fa fa-plus"></i> Nueva Categoria', array('action' => 'add'), array(
			'class'=>'btn btn-primary btn-sm',
			'escape'=>false
		)); ?>	
	</div>
</div>

<br>
<br>

<div class="row">
	<div class="col-md-12">
		<table class="table">
		<tr>
					<th class="text-center">
						<i class="fa fa-group"></i>
						<br>
						Nombre de la categoría
					</th>
					<th class="text-center">
						<i class="fa fa-group"></i>
						<br>
						Descripción de la categoría
					</th>
					<th class="text-center">
						<i class="fa fa-group"></i>
						<br>
						Opciones
					</th>
		</tr>
		<?php foreach ($questionCategories as $questionCategory): ?>
	<tr>
		<td class="text-center"><?php echo h($questionCategory['QuestionCategory']['nombre']); ?></td>
		<td class="text-center"><?php echo h($questionCategory['QuestionCategory']['descripcion']); ?></td>
		<td class="text-center">

			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
			    <i class="fa fa-tasks"></i>
			    <span class="caret"></span>
			  </button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'question_categories',
							'action'=>'view', $questionCategory['QuestionCategory']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Ver
						</a>
					</li>

					<?php if($questionCategory['QuestionCategory']['id'] != 5 && $questionCategory['QuestionCategory']['id'] != 6): ?>
					<li role="presentation">
						<?php $url_action = $this->Html->url(array(
							'controller'=>'question_categories',
							'action'=>'edit', $questionCategory['QuestionCategory']['id']
						)); ?>
						<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
						Editar
						</a>
					</li>

					<li role="presentation">
						<?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $questionCategory['QuestionCategory']['id']), array(
						'role'=>'menuitem',
						'tabindex'=>'-1',
						'escape'=>false), 
						__('Seguro que deseas eliminar esta categoria?', 
						$questionCategory['QuestionCategory']['id'])) ?>
					</li>
					
					<?php endif; ?>
				</ul>
			</div>
		
		<!-- 
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $questionCategory['QuestionCategory']['id']), array('class'=>'btn primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $questionCategory['QuestionCategory']['id']),array('class'=>'btn primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $questionCategory['QuestionCategory']['id']), array('class'=>'btn primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $questionCategory['QuestionCategory']['id'])); ?>
		</td> -->
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