<div class="row">
  <div class="col-md-12">
    <span class="font-size-20">
      <?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Eventos Programados
    </span class="font-size-20">
    <div class="divider"></div>
  </div>
</div>


<?php foreach($events as $event): ?>

  <div class="panel-group" id="accordion">
    <div class="panel alert-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <?= $event['CalendarEvent']['titulo'] ?>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">
          <?= $event['CalendarEvent']['descripcion'] ?>
    <br><br>
          <p>
            <a href="<?= $event['CalendarEvent']['url'] ?>" class="btn btn-primary">Ir a Evento</a>
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

