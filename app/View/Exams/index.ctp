<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Examenes</span class="font-size-20">
			<div class="divider"></div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('titulo'); ?></th>
							<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id', 'Usuario'); ?></th>
							<th><?php echo $this->Paginator->sort('resultado'); ?></th>
							<th class="actions">	</th>
						</tr>
					</thead>
					<?php foreach ($exams as $exam): ?>
					<tbody>
					<tr>
						<td><?php echo h($exam['Exam']['titulo']); ?>&nbsp;</td>
						<td><?php echo h($exam['Exam']['descripcion']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($exam['User']['username'], array('controller' => 'users', 'action' => 'view', $exam['User']['id'])); ?>
						</td>
						<td><?php echo h($exam['Exam']['resultado']); ?>&nbsp;</td>
						<td class="actions">

							<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
							    <i class="fa fa-tasks"></i>
							    <span class="caret"></span>
							  </button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation">
										<?php $url_action = $this->Html->url(array(
											'controller'=>'exams',
											'action'=>'view', $exam['Exam']['id']
										)); ?>
										<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
										Ver
										</a>
									</li>

									<li role="presentation">
										<?php $url_action = $this->Html->url(array(
											'controller'=>'exams',
											'action'=>'edit', $exam['Exam']['id']
										)); ?>
										<a role="menuitem" tabindex="-1" href="<?= $url_action ?>">
										Editar
										</a>
									</li>

									<li role="presentation">
										<?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $exam['Exam']['id']), array(
										'role'=>'menuitem',
										'tabindex'=>'-1',
										'escape'=>false), 
										__('Seguro que deseas eliminar el examen?', 
										$exam['Exam']['id'])) ?>
									</li>
									
								</ul>
							</div>

						</td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td colspan="9">
						<div class="row">
							<div class="col-md-4">
								<?php
								echo $this->Paginator->counter(array(
									'format' => __('Pagina {:page} de {:pages}, {:current} de {:count} registros, de {:start}, a {:end}')
									)); 
									?>					</div>
									<div class="col-md-8">
										<div class="paging">
											<div class="button-group float-right">
												<?php
												echo $this->Paginator->prev(__('<i class="fa fa-backward"></i>'), array('class'=>'btn btn-sm primary-bg', 'escape'=>false), null, array('class' => 'prev disabled btn btn-sm primary-bg', 'escape'=>false));
												echo $this->Paginator->numbers(array('separator' => '', 'class'=>'btn btn-sm primary-bg', 'modulus'=>4));
												echo $this->Paginator->next(__('<i class="fa fa-forward"></i>'), array(
													'class'=>'btn btn-sm primary-bg', 'escape'=>false
													), null, array('class' => 'next disabled btn btn-sm primary-bg', 'escape'=>false));
													?>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
						</table>
					</div>
				</div>