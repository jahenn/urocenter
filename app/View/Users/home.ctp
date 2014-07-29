<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<i class="fa fa-dashboard"></i>
		Dashboard de Usuario     	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>


<div class="row">
	<div class="col-md-6">
	    
	    <?php foreach($notifications as $notification): ?>

	        <div class="infobox infobox-close-wrapper alert alert-info">
	            <div class="large btn font-black info-icon">
	                <!-- <i class="glyph-icon icon-comment"></i> -->
	                <?= $this->Html->image("avatar77.jpg", array(
	                    'class'=>'avatar alert-info'
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
		<div class="row">
			<div class="col-md-12">
				<?php $new_question_url = $this->Html->url(array(
					'controller'=>'questions',
					'action'=>'add'
				)); ?>
				<div class="button-group-vertical float-right">
					<a href="#" class="btn primary-bg large" style="font-size:16px;">
						Examen Aleatorio 
						<i class="fa fa-arrow-right"></i>
					</a>
					<a href="<?= $new_question_url ?>" class="btn btn-success large" style="font-size:16px;">
						Aportar Pregunta
						<i class="fa fa-arrow-right"></i>
					</a>
					
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				    <div class="col-md-12 ">
				        <div class="content-box border-top border-blue-alt pad0A">
				            <h3 class="content-header clearfix">
				            </h3>
				            <div class="content-box-wrapper">
				                <div id="calendar" class="col-md-12 center-margin"></div>
				            </div>
				        </div>
				    </div>
				</div> 
			</div>
		</div>
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

                $('#calendar').fullCalendar({
                    height: 400, 
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    editable: false,
                    dropable:false,
                    events: eventos,
                    // eventColor: 'blue'
                });

                $(".fc-event").each(function(){
                    var txt = $(this).find(".fc-event-title").html();
                    $(this).attr("title", txt);

                    $(this).tooltip();
                });
                
            }
        })
        
        
        
    });

</script>