<style type="text/css">


	
</style>


<div class="row">
	<div class="col-md-12">
		<span class="font-size-20">
			<?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Reportes
		</span class="font-size-20">
		<div class="divider"></div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
				<a href="#general" role="tab" data-toggle="tab">Reporte General</a>
			</li>
			<li>
				<a href="#mensual" role="tab" data-toggle="tab">Mensual</a>
			</li>
			<!-- <li>
				<a href="#en-demanda" role="tab" data-toggle="tab">En Demanda</a>
			</li> -->
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="general">
				<div id="reporte_general"></div>
			</div>
			<div class="tab-pane" id="mensual">
				<div class="row">
					<div class="col-md-12">
						<div id="reporte_mensual"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>




<script type="text/javascript">
	$(function () {

		var url_general = "<?= $this->Html->url(array('action'=>'users_year_data', true)) ?>";

	    $.getJSON(url_general, function(response){

	    	//console.log(response);

	    	$('#reporte_general').highcharts({
	    	    title: {
	    	        text: 'Actividad General',
	    	        x: -20 //center
	    	    },
	    	    subtitle: {
	    	        text: 'Actividad de usuarios, examenes y preguntas',
	    	        x: -20
	    	    },
	    	    xAxis: {
	    	        categories: response.meses
	    	    },
	    	    yAxis: {
	    	        title: {
	    	            text: ''
	    	        },
	    	        plotLines: [{
	    	            value: 0,
	    	            width: 1,
	    	            color: '#808080'
	    	        }]
	    	    },
	    	    tooltip: {
	    	        valueSuffix: ''
	    	    },
	    	    legend: {
	    	        layout: 'verti',
	    	        align: 'right',
	    	        verticalAlign: 'middle',
	    	        borderWidth: 0
	    	    },
	    	    series: [{
	    	        name: 'Usuarios Registrados',
	    	        data: response.usuarios
	    	    }, {
	    	        name: 'Examenes Resueltos',
	    	        data: response.no_examenes
	    	    }, {
	    	        name: 'Promedio por examen',
	    	        data: response.examenes
	    	    }]
	    	});
	    });




		var url_mensual = "<?= $this->Html->url(array('action'=>'users_month_data', true)) ?>";

	    $.getJSON(url_mensual, function(response){

	    	//console.log(response);

	    	$('#reporte_mensual').highcharts({
	    	    title: {
	    	        text: 'Actividad Mensual',
	    	        x: -20 //center
	    	    },
	    	    subtitle: {
	    	        text: 'Actividad de usuarios, examenes y preguntas',
	    	        x: -20
	    	    },
	    	    xAxis: {
	    	        categories: response.fechas
	    	    },
	    	    yAxis: {
	    	        title: {
	    	            text: ''
	    	        },
	    	        plotLines: [{
	    	            value: 0,
	    	            width: 1,
	    	            color: '#808080'
	    	        }]
	    	    },
	    	    tooltip: {
	    	        valueSuffix: ''
	    	    },
	    	    legend: {
	    	        layout: 'verti',
	    	        align: 'right',
	    	        verticalAlign: 'middle',
	    	        borderWidth: 0
	    	    },
	    	    series: [{
	    	        name: 'Usuarios Registrados',
	    	        data: response.usuarios
	    	    }, {
	    	        name: 'Examenes Resueltos',
	    	        data: response.no_examenes
	    	    }, {
	    	        name: 'Promedio por examen',
	    	        data: response.examenes
	    	    }]
	    	});


			
	    });
	});
</script>