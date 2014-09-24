<div class="row">
  <div class="col-md-12">
    <span class="font-size-20">
      <?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Eventos Programados
    </span class="font-size-20">
    <div class="divider"></div>
  </div>
</div>

<?php $i=0; ?>
<?php foreach($events as $event): ?>
  <?php $i++; ?>
  <div class="panel-group" id="accordion">
    <div class="panel alert-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?= $i ?>">
            <?= $event['CalendarEvent']['titulo'] ?>
          </a>
        </h4>
      </div>
      <div id="collapseOne_<?= $i ?>" class="panel-collapse collapse">
        <div class="panel-body">
          <?= $event['CalendarEvent']['descripcion'] ?>
    <br><br>
          <p>
            <?php $delete_event = $this->Html->url(array(
              'controller'=>'calendar_events', 
              'action'=>'delete', 
              $event['CalendarEvent']['id']
              )) ?>
            <!-- <a href="<?= $delete_event ?>" class="btn btn-primary">Eliminar</a> -->
            <a href="<?= $this->Html->url(array(
              'controller'=>$event['CalendarEvent']['controller'],
              'action'=>$event['CalendarEvent']['accion'],
              $event['CalendarEvent']['params']
            )) ?>" class="btn btn-primary">Ir a Evento</a>
          </p>
        </div>
      </div>
    </div>
  </div>

<?php endforeach ?>





<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

