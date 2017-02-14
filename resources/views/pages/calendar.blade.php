@extends('layouts.dashboard')
@section('section')
	<div class="conter-wrapper">
		<div class="card">
			<div class="card-block">
				<div id="calendar1"></div>
			</div>
		</div>
	</div>
@stop

@section('js')	
	@parent
	<script type="text/javascript">
		$(document).ready(function() {
		    // page is now ready, initialize the calendar...
		    $('#calendar1').fullCalendar({
		        eventClick: function(calEvent, jsEvent, view) {
		        alert('Event: ' + calEvent.title);
		        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
		        alert('View: ' + view.name);  
		    	}
		    })
		});
	</script>
@stop