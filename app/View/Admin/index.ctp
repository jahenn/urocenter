
<div class="row">
    <div class="col-md-6">
        <h4 class="heading-1 clearfix">
            <div class="heading-content">
                <i class="fa fa-dashboard"></i> Dashboard
            </div>
            <div class="clear"></div>

            
        </h4>
    </div>
    <div class="col-md-6 float-right">
       <div class="button-group float-right">
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
           <a href="<?= $url_program_examen ?>" class="btn primary-bg large"> <i style="font-size:18px;" class="fa fa-clock-o"></i> Programar Examen </a>
           <a href="<?= $url_new_question ?>" class="btn primary-bg large"> <i style="font-size:18px;" class="fa fa-check-square-o"></i> Nueva Pregunta</a>
           <br>
       </div>
    </div>
</div>
<div class="divider"></div>

<h4><i class="fa fa-warning"></i> Actividad</h4>
<br>
<div class="row">
    <div class="col-md-6">
        
        <?php foreach($notifications as $notification): ?>

            <div class="infobox infobox-close-wrapper alert alert-info">
                <div class="large btn font-black info-icon">
                    <!-- <i class="glyph-icon icon-comment"></i> -->
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


        



        <div class="row">
            <div class="col-md-6">
                <?php $new_user_url = $this->Html->url(array(
                    'controller'=>'users',
                    'action'=>'group', 'news'
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
                            <?= $users ?> / <span style="color:red;"><?= $users_pendientes ?></span>
                        </div>
                        <div class="float-right">Registrados / Inactivos</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <?php $new_user_url = $this->Html->url(array(
                    'controller'=>'users',
                    'action'=>'news'
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
        </div> <!-- End Row -->

        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="content-box border-top border-blue-alt mrg25B">
                    <h3 class="content-header clearfix">
                        Usuarios Registrados
                    </h3>
                    <div class="content-box-wrapper">
                        <div id="revenue-chart" style="height:200px;"></div>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->

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
        </div> <!-- End row -->


    </div>
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

<!-- Charts -->
<script type="text/javascript">
    $(document).ready(function(){
        "use strict";
        var area = new Morris.Area({
            element: 'revenue-chart',
            resize: true,  
            data: [
                {y: '2011 Q1', item1: 2666},
                {y: '2011 Q2', item1: 2778},
                {y: '2011 Q3', item1: 4912},
                {y: '2011 Q4', item1: 3767},
                {y: '2012 Q1', item1: 6810},
                {y: '2012 Q2', item1: 5670},
                {y: '2012 Q3', item1: 4820},
                {y: '2012 Q4', item1: 15073},
                {y: '2013 Q1', item1: 10687},
                {y: '2013 Q2', item1: 8432}
            ],
            xkey: 'y',
            ykeys: ['item1'],
            labels: ['Item 1'],
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover: 'auto'
        }).on('click', function(i, row){
            console.log(i,row);
        });

    });
</script>



<script type="text/javascript">
    $(document).ready(function(){
        //alert("ok");
        
    });
</script>


