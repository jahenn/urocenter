<h4 class="heading-1 clearfix">
    <div class="heading-content">
        <i class="fa fa-dashboard"></i> Admin Dashboard
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<div class="row">
    <div class="col-md-3">

        <a href="javascript:;" class="tile-button tile-button-alt btn bg-green pad0A" title="">
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
                    125 / <span style="color:red;">90</span>
                </div>
                <div class="float-right">Registrados / Inactivos</div>
            </div>
        </a>
    </div>
    <div class="col-md-3">

        <a href="javascript:;" class="tile-button tile-button-alt btn bg-blue   pad0A" title="">
            <div class="tile-header">
                Examenes Contestados

                <!-- <div class="float-right">
                    <i class="glyph-icon icon-caret-up mrg5R"></i>
                    +55%
                </div> -->
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-file"></i>
                <div class="tile-content">
                    18 /  <span style="color:green;">12</span> / <span style="color:red;">6</span>
                </div>
                <div class="float-right">Contestados / Aprobados / Reprobados</div>
            </div>
        </a>
    </div>

    <div class="col-md-3">

        <a href="javascript:;" class="tile-button tile-button-alt btn bg-orange   pad0A" title="">
            <div class="tile-header">
                Nuevas Preguntas

                <!-- <div class="float-right">
                    <i class="glyph-icon icon-caret-up mrg5R"></i>
                    +55%
                </div> -->
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-file"></i>
                <div class="tile-content">
                    14 /  <span style="color:green;">9</span> / <span style="color:red;">5</span>
                </div>
                <div class="float-right">Nuevas / Aprobadas / Sin Revisar</div>
            </div>
        </a>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <?php 
            $url_new_question = $this->Html->url(array(
                'controller'=>'questions',
                'action'=>'add'
                ), true);
         ?>
        <a href="#" class="btn primary-bg large"> <i style="font-size:18px;" class="fa fa-clock-o"></i> Programar Examen </a>
        <a href="<?= $url_new_question ?>" class="btn primary-bg large"> <i style="font-size:18px;" class="fa fa-question"></i> Nueva Pregunta</a>
    </div>
</div>

<br>



<h2>Examenes Programados</h2>

<div class="row">

    <div id="calendar" class="col-md-12 center-margin"></div>

</div>


<script>

    $(document).ready(function() {
    
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        var eventos = 'http://localhost/rx/calendar_events/json';

        $.ajax({
            type: 'json',
            url: eventos,
            success: function(data){
                eventos = $.parseJSON(data);

                $('#calendar').fullCalendar({
                    height: 600, 
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    editable: true,
                    events: eventos,
                    eventColor: 'blue'
                });
                
            }
        })
        
        
        
    });

</script>