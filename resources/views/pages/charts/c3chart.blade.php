@extends('layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">

					<div class="card-header card-primary">
						Line Chart
					</div>

					<div class="card-block">
						<div id="linechart"></div>
					</div>

				</div>
			</div>	
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">

					<div class="card-header card-warning">
						Pie Chart

					</div>

					<div class="card-block">
						<div id="piechart"></div>
					</div>

				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">

					<div class="card-header card-success">
						Donut Chart
					</div>
					<div class="card-block">
						<div id="donutchart"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">

					<div class="card-header card-danger">
						Area Chart
					</div>

					<div class="card-block">
						<div id="areachart"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
@stop
@section('js')
	@parent
	<script>
		var chart1 = c3.generate({
		    bindto: '#linechart',
		        data: {
		        columns: [
		            ['data1', 30, 200, 100, 400, 150, 250],
		            ['data2', 50, 20, 10, 40, 15, 25]
		        ]
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    }
		});
		var chart2 = c3.generate({
		   bindto: '#piechart',
		    data: {
		         
		        // iris data from R
		        columns: [
		            ['data1', 30],
		            ['data2', 120],
		        ],
		        type : 'pie',
		        onclick: function (d, i) { console.log("onclick", d, i); },
		        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    }
		});
		 var chart3 = c3.generate({
		    bindto: '#donutchart',
		    data: {
		        columns: [
		            ['data1', 30],
		            ['data2', 120],
		        ],
		        type : 'donut',
		        onclick: function (d, i) { console.log("onclick", d, i); },
		        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
		    },
		    donut: {
		        title: "Donut Chart"
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    }
		});
		 var chart4 = c3.generate({
		     bindto: '#areachart',
		     data: {
		         columns: [
		             ['data1', 200, 240, 300, 70, 10, 0],
		             ['data2', 130, 100, 140, 200, 150, 50]
		         ],
		         types: {
		             data1: 'area',
		             data2: 'area-spline'
		         }
		     },
		     color: {
		         pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		     }
		 });

	</script>
@stop