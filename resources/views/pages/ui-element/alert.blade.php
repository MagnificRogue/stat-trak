@extends('layouts.dashboard')
@section('section')
<div class="conter-wrapper">				
	<div class="card card-inverse">
		<div class="card-header card-primary">
			Dismissable Alerts
		</div>
		<div class="card-block">
			<div>
				@include('widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'))
				@include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
				@include('widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'))
				@include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'))	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card card-inverse">
				<div class="card-header card-info">
					Growl Alerts
				</div>
				<div class="card-block">
					<p>						
						<button type="button" class="primary-growl btn btn-primary" >Primary Growl</button>
						<button type="button" class="info-growl btn btn-info" >Info Growl</button> 
						<button type="button" class="warning-growl btn btn-warning" >Warning Growl</button> 
						<button type="button" class="danger-growl btn btn-danger" >Danger Growl</button> 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('js')
	@parent
		<script type="text/javascript">

  			$('.primary-growl').click(function(event) {
		        return $.growl({
		      	title: 'Hello!',
		        message: "The kitten is attacking!"
		      });
		    });
		    $('.danger-growl').click(function(event) {
		        return $.growl.error({
		        message: "The kitten is attacking!"
		      });
		    });
		    $('.info-growl').click(function(event) {
		        return $.growl.notice({
		        message: "The kitten is cute!"
		      });
		    });
		    $('.warning-growl').click(function(event) {
		        return $.growl.warning({
		        message: "The kitten is ugly!"
		      });
		    });
		</script>
@stop