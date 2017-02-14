@extends('layouts.dashboard')

@section('section')
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-xl-8 col-lg-6 col-md-12">
				<div class="card card-inverse">
				<div class="card-header card-primary">
						List Group
					</div>
					<div class="card-block">
						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Morbi leo risus</li>
							<li class="list-group-item">Porta ac consectetur ac</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
						<br>
						<ul class="list-group">
							<li class="list-group-item">
						    	<span class="label label-default label-pill pull-xs-right">14</span>
						    	Cras justo odio
						    </li>
						</ul>
						<br>
						<div class="list-group">
							<a href="javascript:void(0)" class="list-group-item active">
								Cras justo odio
							</a>
							<a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a>
							<a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a>
							<a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a>
							<a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a>
						</div>
						<br>
						<div class="list-group">
							<a href="javascript:void(0)" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
							<a href="javascript:void(0)" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
						</div>
						<br>
						<div class="list-group">
							<a href="javascript:void(0)" class="list-group-item active">
								<h5 class="list-group-item-heading">List group item heading</h5>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
							</a>
							<a href="javascript:void(0)" class="list-group-item">
								<h5 class="list-group-item-heading">List group item heading</h5>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
							</a>
							<a href="javascript:void(0)" class="list-group-item">
								<h5 class="list-group-item-heading">List group item heading</h5>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-warning">
						Labels &amp; Badges
					</div>
					<div class="card-block">
						<span class="label label-default">labels</span>
						<span class="label label-primary">labels</span>
						<span class="label label-success">labels</span>
						<span class="label label-info">labels</span>
						<span class="label label-warning">labels</span>
						<span class="label label-danger">labels</span>
						<br><br>
						<span class="label label-pill label-primary">35</span>
						<span class="label label-pill label-info">67</span>
						<span class="label label-pill label-success">12</span>
						<span class="label label-pill label-danger">39</span>
						<span class="label label-pill label-warning">07</span>
						<span class="label label-pill label-danger">94</span>
						<span class="label label-pill label-info"><i class="fa fa-star"></i></span>
						<span class="label label-pill label-primary"><i class="fa fa-certificate"></i></span>
					</div>
				</div>


				<div class="card card-inverse">
					<div class="card-header card-danger">
						Carousel
					</div>
					<div class="card-block">
						<div id="carousel-example-generic" class="carousel slide carousel-text" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									Success is not final, failure is not fatal: it is the courage to continue that counts.
									<div class="carousel-caption">
									</div>
								</div>
								<div class="carousel-item">
									To succeed in life, you need two things: ignorance and confidence.
									<div class="carousel-caption">
									</div>
								</div>
								<div class="carousel-item">
									Success is how high you bounce when you hit bottom.
									<div class="carousel-caption">
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="icon-prev" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="icon-next" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>

				<div class="card card-inverse">
					<div class="card-header card-info">
						Carousel
					</div>
					<div class="card-block">
						<div id="carousel-example-generic2" class="carousel slide carousel-photo" data-ride="carousel2">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic2" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic2" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="img-fluid" src="../images/img1.jpg">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid" src="../images/img2.jpg">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="carousel-item">
									<img class="img-fluid" src="../images/img3.jpg">
									<div class="carousel-caption">
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
							    <span class="icon-prev" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
							    <span class="icon-next" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>

				<div class="card card-inverse tool">
					<div class="card-header card-success">
						Tooltip &amp; Popover
					</div>
					<div class="card-block">
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Left Tooltip</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top Tooltip</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom Tooltip</button>
						<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Right Tooltip</button>
						<hr/>
						<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left Popover</button>
						<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top Popover</button>
						<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Bottom Popover</button>
						<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right Popover</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('js')
	@parent
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		  $(function () {
		    $('[data-toggle="popover"]').popover()
		  })
		})
	</script>
@stop