<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Categorias de Preguntas / <?php echo h($questionCategory['QuestionCategory']['nombre']); ?></span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>
<?php echo h($questionCategory['QuestionCategory']['descripcion']); ?>
<br><br><br>
<div class="related">
	<?php if (!empty($questionCategory['Question'])): ?>
	<table  class="table table-hover">
	<thead>
		<tr>
			<th class="text-center">
				<i class="fa fa-plus-circle"></i>
				<br>
				Nuevas Preguntas
			</th>
			<th class="text-center">
				<i class="fa fa-paste"></i>
				<br>
				Opciones
			</th>
		</tr>
	</thead>
	<?php foreach ($questionCategory['Question'] as $question): ?>
		<tr>
			<td class="text-center"><?php echo $question['question']; ?></td>
			<td class="text-center">

				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
				    Opciones
				    <span class="caret"></span>

				  </button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li role="presentation">
							<?php $url_group = $this->Html->url(array(
									'controller'=>'questions',
									'action'=>'view', $question['id']
								)); ?>
							<a href="<?= $url_group ?>" role="menuitem" tabindex="-1">
								Ver
							</a>
						</li>
						<li role="presentation">
							<?php $url_group = $this->Html->url(array(
									'controller'=>'questions',
									'action'=>'edit', $question['id']
								)); ?>
							<a href="<?= $url_group ?>" role="menuitem" tabindex="-1">
								Editar
							</a>
						</li>
						<li role="presentation">
							<?= $this->Form->postLink(__('Eliminar'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(
								'role'=>'menuitem',
								'tabindex'=>'-1'
							), __('Estas seguro de eliminar la pregunta?', $question['id'])) ?>
						</li>
						
						
					</ul>
				</div>

			<!-- 
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?> -->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<br>



<!-- ############# -->

<!--
<div class="questionCategories view">
<h2><?php echo __('Question Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionCategory['QuestionCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($questionCategory['QuestionCategory']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($questionCategory['QuestionCategory']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question Category'), array('action' => 'edit', $questionCategory['QuestionCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Category'), array('action' => 'delete', $questionCategory['QuestionCategory']['id']), array(), __('Are you sure you want to delete # %s?', $questionCategory['QuestionCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($questionCategory['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Question Category Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Question Status Id'); ?></th>
		<th><?php echo __('Fecha Creacion'); ?></th>
		<th><?php echo __('Question Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($questionCategory['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['question']; ?></td>
			<td><?php echo $question['question_category_id']; ?></td>
			<td><?php echo $question['imagen']; ?></td>
			<td><?php echo $question['question_status_id']; ?></td>
			<td><?php echo $question['fecha_creacion']; ?></td>
			<td><?php echo $question['question_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->
