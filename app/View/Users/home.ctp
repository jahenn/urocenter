



<div class="row">
	<div class="col-md-6">
	    
	    <?php foreach($notifications as $notification): ?>
	        <div class="infobox infobox-close-wrapper alert alert-info">
	            <div class="large btn font-black info-icon">
	                <!-- <i class="glyph-icon icon-comment"></i> --><!-- 
	                <?= $this->Html->image("avatar77.jpg", array(
	                    'class'=>'avatar alert-info'
	                )) ?> -->
	                <?= $this->element('avatar_user', array(
	                	'custom_user'=>$notification['User'],
	                	'opciones'=>array(
	                		'class'=>'avatar alert-info',

	                		)
	                )) ?>
	            </div>
	            <h4 class="infobox-title">
	                <a href="#"><small><?= $notification['User']['username'] ?></small></a>
	                <?= $notification['Notification']['titulo'] ?>
	            </h4>
	            <p>
	                <?= $notification['Notification']['descripcion'] ?>
	            </p>

	            <a class="glyph-icon infobox-close icon-remove" title="Close Message" href="#"></a>
	        </div>
	    <?php endforeach ?>

	</div>
	<div class="col-md-6">
		<!-- Responsive calendar - START -->
		<div class="responsive-calendar">
		  <div class="controls">
		        <br>
		      <a class="pull-left" data-go="prev"><div class="btn"><i class="fa fa-arrow-left"></i></div></a>
		      <h4><span data-head-month></span>&nbsp;&nbsp;&nbsp;<span data-head-year></span></h4>
		      <a class="pull-right" data-go="next"><div class="btn"><i class="fa fa-arrow-right"></i></div></a>
		  </div>
		  <hr/>
		  <div class="day-headers">
		    <div class="day header">L</div>
		    <div class="day header">M</div>
		    <div class="day header">M</div>
		    <div class="day header">J</div>
		    <div class="day header">V</div>
		    <div class="day header">S</div>
		    <div class="day header">D</div>
		  </div>
		  <div class="days" data-group="days">
		    <!-- the place where days will be generated -->
		  </div>
		</div>
		<!-- Responsive calendar - END -->
	</div>
</div>






<script>

    $(document).ready(function() {
    
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        //var eventos = 'http://localhost/rx/calendar_events/json';

        var eventos = "<?= $this->Html->url(array('controller'=>'calendar_events', 'action'=>'json'), true) ?>";

        $.ajax({
            type: 'json',
            url: eventos,
            success: function(data){
                eventos = $.parseJSON(data);

                //alert(data);

                $(".responsive-calendar").responsiveCalendar({
                    events: eventos,
                    translateMonths: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
                }); 
                
            }

        });
        
        
        
    });

</script>