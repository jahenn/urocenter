<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Resolver Examen'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>


<h2><?= $this->request->data['ScheduledExam']['titulo'] ?></h2>
<?php $fecha = new DateTime($this->request->data['ScheduledExam']['fecha_programada']); ?>
<?php $fecha_limite = new DateTime($this->request->data['ScheduledExam']['fecha_limite']); ?>
<h5>
	Fecha Programada
	<small><?= $fecha->format('d-M-Y') ?></small>
</h5>

<h5>
	Fecha Limite
	<small><?= $fecha_limite->format('d-M-Y') ?></small>
</h5>
<h5>Comentarios</h5>
<pre>
	<?= $this->request->data['ScheduledExam']['comentarios'] ?>
</pre>


<br>


<?php $start_url = $this->Html->url(array(
	'action'=>'start',
	$this->request->data['ScheduledExam']['id']
)); ?>

<a href="<?= $start_url ?>" class="btn success-bg x-large" style="width:400px; font-size:25px;">
	Iniciar Examen 
	<i class="glyph-icon icon-arrow-circle-right"></i>
</a>


<?php 
	
	


	pr($this->request->data);
 ?>