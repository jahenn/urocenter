
<?php $this->layout = 'agile'; ?>
<div class="row">
    <div class="col-md-12">
        <span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> </span>
    </div>
</div>
<div class="divider"></div>



<div class="hidden-sm hidden-lg hidden-md" style="padding-left:20px;">
    <div class="row">
        <div class="btn-group">
            <?php 
                $url_new_question = $this->Html->url(array(
                    'controller'=>'questions',
                    'action'=>'add'
                    ), true);

                $url_program_examen = $this->Html->url(array(
                     'controller'=>'ScheduledExams',
                     'action'=>'add'
                 ), true);

             ?>
            <a href="<?= $url_program_examen ?>" class="btn btn-success"> <i class="fa fa-clock-o"></i> Programar Examen </a>
            <a href="<?= $url_new_question ?>" class="btn btn-info"> <i class="fa fa-check-square-o"></i> Nueva Pregunta</a>
        </div>
    </div>
</div>
<br>
<h4><i class="fa fa-info"></i> Actividad</h4>
<br>
<div class="row">
    <div class="col-md-6">
        
        <?= $this->element('notifications', array(
            'notifications'=>$notifications
        )) ?>
        

    </div>
    
    <div class="col-md-3">
        <?php $new_user_url = $this->Html->url(array(
            'controller'=>'users',
            'action'=>'group', 'nuevos'
        )); ?>
        <a href="<?= $new_user_url ?>" class="tile-button tile-button-alt btn bg-blue-alt pad0A" title="">
            <div class="tile-header">
                Nuevos Usuarios

                <!-- <div class="float-right">
                    <i class="glyph-icon icon-caret-up mrg5R"></i>
                    +55%
                </div> -->
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-user"></i>
                <div class="tile-content">
                    <?= $users ?> 
                </div>
                <div class="float-right">Registrados</div>
            </div>
        </a>
    </div>
    

    <div class="col-md-3">
        <?php $new_user_url = $this->Html->url(array(
            'controller'=>'questions',
            'action'=>'index'
        )); ?>
        <a href="<?= $new_user_url ?>" class="tile-button tile-button-alt btn bg-green pad0A" title="">
            <div class="tile-header">
                Nuevas Preguntas

                <!-- <div class="float-right">
                    <i class="glyph-icon icon-caret-up mrg5R"></i>
                    +55%
                </div> -->
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-edit"></i>
                <div class="tile-content">
                    <?= $questions ?> / <span style="color:red;"><?= $questions_pendientes ?></span>
                </div>
                <div class="float-right">Nuevas / Inactivas</div>
            </div>
        </a>
    </div>


    <div class="col-md-6">
        <div class="content-box border-top border-blue-alt mrg25B">
            <h3 class="content-header clearfix">
                Promedio de Calificaciones
            </h3>
            <div class="content-box-wrapper">
                <div id="revenue-chart" style="height:200px;"></div>
            </div>
        </div>
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

<!--  -->

</div>

<br>








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

<!-- Charts -->
<script type="text/javascript">
    $(document).ready(function(){
        "use strict";

        // [
        //                 {y: '2011 Q1', item1: 2666},
        //                 {y: '2011 Q2', item1: 2778},
        //                 {y: '2011 Q3', item1: 4912},
        //                 {y: '2011 Q4', item1: 3767},
        //                 {y: '2012 Q1', item1: 6810},
        //                 {y: '2012 Q2', item1: 5670},
        //                 {y: '2012 Q3', item1: 4820},
        //                 {y: '2012 Q4', item1: 15073},
        //                 {y: '2013 Q1', item1: 10687},
        //                 {y: '2013 Q2', item1: 8432}
        //             ]

        var area = new Morris.Area({
            element: 'revenue-chart',
            resize: true,  
            xkey: 'fecha',
            ykeys: ['value'],
            labels: ['Calificación Promedio'],
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover: 'auto'
        }).on('click', function(i, row){
            console.log(i,row);
        });

        var graphic_url = "<?= $this->Html->url(array(
                'controller'=>'Exams',
                'action'=>'promedio_mensual'
            ), true) ?>";


        $.ajax({
            url: graphic_url,
            dataType: 'json',
            success: function(data){
                //alert(data);
                area.setData(data);
            }
        });

    });
</script>



<script type="text/javascript">
    $(document).ready(function(){
        $.jGrowl("Bienvenido a Urocenter", { header: 'Bienvenido' });
    });
</script>


