
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Preguntas / Ver Pregunta</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<h3><?php echo h($question['Question']['question']); ?></h3>
	</div>
	<?php if($question['Question']['question_status_id'] == 1): ?>
	<div class="col-md-6">
		<div class="btn-group float-right">
			<?php $aprobar_url = $this->Html->url(array(
				'action'=>'aprobe', $question['Question']['id']
			)); ?>
			<a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
			<a href="<?= $aprobar_url ?>" class="btn btn-success">Aprobar Pregunta <i class="fa fa-check"></i></a>
		</div>
	</div>
	<?php endif ?>
</div>
<div class="row">
	<div class="col-md-12">
		<h4>Categoria: <small><?php echo $this->Html->link($question['QuestionCategory']['nombre'], array('controller' => 'question_categories', 'action' => 'view', $question['QuestionCategory']['id'])); ?></small>
		</h4>
		<h4>Tipo de Pregunta <small><?= $question['QuestionType']['tipo'] ?></small></h4>
		<?= $this->Html->image('question-images/' . $question['Question']['imagen'], array(
			'width'=>'350px'
		)) ?>
	</div>
</div>
<br><br>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th colspan="2" class="font-size-20">Respuestas</th>
				</tr>
			</thead>
			<?php foreach ($question['Answer'] as $answer): ?>
				<tr>
					<td><?= $answer['answer'] ?></td>
					<td><?= ($answer['answer_is_ok'] == true)?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' ?></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</div>


<!--  

<div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>
				<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
					<td class=" col-md-10 float-none text-left ">
						<?php echo h($question['Question']['id']); ?>
						&nbsp;
					</td>
				</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Question'); ?></th>
				<td class=" col-md-10 float-none text-left ">
					<?php echo h($question['Question']['question']); ?>
					&nbsp;
				</td>
			</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Question Category'); ?></th>
			<td class=" col-md-10 float-none text-left ">
				<?php echo $this->Html->link($question['QuestionCategory']['nombre'], array('controller' => 'question_categories', 'action' => 'view', $question['QuestionCategory']['id'])); ?>
				&nbsp;
			</td>
		</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Imagen'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($question['Question']['imagen']); ?>
			&nbsp;
		</td>
	</tr>			</tr>
</table>
</div>
</div>
<div class="related">
	<?php if (!empty($question['Answer'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="6">
					<?php echo __('Related Answers'); ?>				</th>
				</tr>
			</thead>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Question Id'); ?></th>
				<th><?php echo __('Answer'); ?></th>
				<th><?php echo __('Answer Is Ok'); ?></th>
				<th><?php echo __('Value'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($question['Answer'] as $answer): ?>
			<tr>
				<td><?php echo $answer['id']; ?></td>
				<td><?php echo $answer['question_id']; ?></td>
				<td><?php echo $answer['answer']; ?></td>
				<td><?php echo $answer['answer_is_ok']; ?></td>
				<td><?php echo $answer['value']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), array(), __('Are you sure you want to delete # %s?', $answer['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add'), array(
			'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>
<div class="related">
	<?php if (!empty($question['UserAnswer'])): ?>
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
			<?php foreach ($question['UserAnswer'] as $userAnswer): ?>
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
	<?php if (!empty($question['Exam'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="4">
					<?php echo __('Related Exams'); ?>				</th>
				</tr>
			</thead>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Exam Category Id'); ?></th>
				<th><?php echo __('Exam Description'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($question['Exam'] as $exam): ?>
			<tr>
				<td><?php echo $exam['id']; ?></td>
				<td><?php echo $exam['exam_category_id']; ?></td>
				<td><?php echo $exam['exam_description']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'exams', 'action' => 'view', $exam['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'exams', 'action' => 'edit', $exam['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exams', 'action' => 'delete', $exam['id']), array(), __('Are you sure you want to delete # %s?', $exam['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add'), array(
			'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>
-->


<!-- ############# -->

<!--
<div class="questions view">
<h2><?php echo __('Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($question['Question']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($question['Question']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($question['QuestionCategory']['nombre'], array('controller' => 'question_categories', 'action' => 'view', $question['QuestionCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($question['Question']['imagen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $question['Question']['id']), array(), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Categories'), array('controller' => 'question_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Category'), array('controller' => 'question_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related Answers'); ?></h3>
	<?php if (!empty($question['Answer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th><?php echo __('Answer Is Ok'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($question['Answer'] as $answer): ?>
		<tr>
			<td><?php echo $answer['id']; ?></td>
			<td><?php echo $answer['question_id']; ?></td>
			<td><?php echo $answer['answer']; ?></td>
			<td><?php echo $answer['answer_is_ok']; ?></td>
			<td><?php echo $answer['value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), array(), __('Are you sure you want to delete # %s?', $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Answers'); ?></h3>
	<?php if (!empty($question['UserAnswer'])): ?>
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
	<?php foreach ($question['UserAnswer'] as $userAnswer): ?>
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
	<h3><?php echo __('Related Exams'); ?></h3>
	<?php if (!empty($question['Exam'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exam Category Id'); ?></th>
		<th><?php echo __('Exam Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($question['Exam'] as $exam): ?>
		<tr>
			<td><?php echo $exam['id']; ?></td>
			<td><?php echo $exam['exam_category_id']; ?></td>
			<td><?php echo $exam['exam_description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exams', 'action' => 'view', $exam['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exams', 'action' => 'edit', $exam['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exams', 'action' => 'delete', $exam['id']), array(), __('Are you sure you want to delete # %s?', $exam['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->
