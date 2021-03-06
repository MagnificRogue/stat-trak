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
						<canvas id="cline"></canvas>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12" id="bar-chart">
				<div class="card card-inverse">
					<div class="card-header card-warning">
						Bar Chart
					</div>
					<div class="card-block">
						<canvas id="cbar"></canvas>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12" id="doughnut-chart">
				<div class="card card-inverse">
					<div class="card-header card-success">
						Donut Chart
					</div>
					<div class="card-block">
						<canvas class ="round" id="cdonut"></canvas>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12" id="pie-chart">
				<div class="card card-inverse">
					<div class="card-header card-danger">
						Pie Chart
					</div>
					<div class="card-block">
						<canvas class ="round" id="cpie"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop
@section('js')
	@parent
    <script>
			var data1 = {
			    labels: ["January", "February", "March", "April", "May", "June", "July"],
			    datasets: [
			        {
			            label: "My First dataset",
			            fillColor: "rgba(200, 200, 255, 0.3)",
			            strokeColor: "rgba(6, 197, 172, 1))",
			            pointColor: "rgba(6, 197, 172, 1))",
			            pointStrokeColor: "#fff",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "rgba(6, 197, 172, 1))",
			            data: [65, 59, 80, 81, 56, 55, 40]
			        },
			        {
			            label: "My Second dataset",
			            fillColor: "rgba(213, 125, 109, 0.3)",
			            strokeColor: "rgba(213, 125, 109, 1)",
			            pointColor: "rgba(213, 125, 109, 1)",
			            pointStrokeColor: "#fff",
			            pointHighlightFill: "#fff",
			            pointHighlightStroke: "rgba(213, 125, 109, 1)",
			            data: [28, 48, 40, 19, 86, 27, 90]
			        }
			    ]
			};

			var cline = document.getElementById("cline").getContext("2d");
	        new Chart(cline).Line(data1, {
	            responsive: true
	        });
            var data2 = {
    		    labels: ["January", "February", "March", "April", "May", "June", "July"],
    		    datasets: [
    		        {
    		            label: "My First dataset",
    		            fillColor: "rgba(162, 209, 158, 0.5)",
    		            strokeColor: "rgba(162, 209, 158, 0.9)",
    		            highlightFill: "rgba(162, 209, 158, 0.7)",
    		            highlightStroke: "rgba(162, 209, 158, 1)",
    		            data: [65, 59, 80, 81, 56, 55, 40]
    		        },
    		        {
    		            label: "My Second dataset",
    		            fillColor: "rgba(232, 183, 105, 0.5)",
    		            strokeColor: "rgba(232, 183, 105, 0.9)",
    		            highlightFill: "rgba(232, 183, 105, 0.7)",
    		            highlightStroke: "rgba(232, 183, 105, 1)",
    		            data: [28, 48, 40, 19, 86, 27, 90]
    		        }
    		    ]
    		};
    		var cbar = document.getElementById("cbar").getContext("2d");
            new Chart(cbar).Bar(data2, {
                responsive: true
            });
            var data3 = [
    		    {
    		        value: 100,
    		        color:"#06C5AC",
    		        highlight: "rgba(6, 197, 172, 0.9)",
    		        label: "Primary"
    		    },
    		    {
    		        value: 50,
    		        color: "#D57D6D",
    		        highlight: "rgba(213, 125, 109, 0.9)",
    		        label: "Danger"
    		    },
    		    {
    		        value: 50,
    		        color: "#80B1CB",
    		        highlight: "rgba(128, 177, 203, 0.9)",
    		        label: "Info"
    		    },
    		    {
    		        value: 100,
    		        color: "#E8B769",
    		        highlight: "rgba(232, 183, 105, 0.9)",
    		        label: "Warning"
    		    }
    		]
    		var cdonut = document.getElementById("cdonut").getContext("2d");
            new Chart(cdonut).Doughnut(data3, {
                responsive: true,
                animateScale: true
            });
            var data4 = [
    		    {
    		        value: 220,
    		        color:"#A2D19E",
    		        highlight: "rgba(162, 209, 158, 0.9)",
    		        label: "Success"
    		    },
    		    {
    		        value: 70,
    		        color: "#D57D6D",
    		        highlight: "rgba(213, 125, 109, 0.9)",
    		        label: "Danger"
    		    },
    		    {
    		        value: 100,
    		        color: "#80B1CB",
    		        highlight: "rgba(128, 177, 203, 0.9)",
    		        label: "Info"
    		    }
    		]
    		var cpie = document.getElementById("cpie").getContext("2d");
            new Chart(cpie).Pie(data4, {
                responsive: true
            });
            $(function(){
               $('.theme-picker').click(function() {
                   changeTheme($(this).attr('id'));
               }); 
            });
            function changeTheme(theme) {
            $('<link>')
                .appendTo('head')
                .attr({type : 'text/css', rel : 'stylesheet'})
                .attr('href', '/css/app-'+theme+'.css');
                $.get('api/change-theme?theme='+theme);
            }
	</script>
@stop