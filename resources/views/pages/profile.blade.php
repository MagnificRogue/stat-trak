@extends('layouts.dashboard')
@section('section')
	<div class="conter-wrapper">
		<div class="cover-wrapper">
			<div class="cover-photo" style="background-image: url( 'images/profile-cover.jpg ') ;">
				<div class="name-desg">
					<h3>
						Kumar Sanket
						<small>CEO and Founder @Sahusoft</small>
					</h3>
				</div>
			</div>
			<div class="profile-photo-warp">
				<img class="profile-photo img-responsive img-circle" src="images/flat.png" alt="">
			</div>
			<div class="foobar">
				<a href=""><i class="fa fa-heart text-danger"></i> 443</a> &nbsp;&nbsp;&nbsp; <i class="fa fa-users"></i> 443
				<span class="probutton"> <button type="button" class="btn btn-primary  btn-bordered   ">
					Follow</button> 
				</span>
				<span class="links pull-right"><a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-github"></i></a></span>
			</div>
		</div>
		<div class="conter-wrapper">
			<div>
				<div class="profile-body row" id="profile-items">
					<div class="col-sm-6 pr0">
						<div class="profile-comment prophoto">	
							<div class="card">

								<div class="card-block card-default">
									<textarea name="" id="" cols="54" rows="4"></textarea>
								</div>
								<div class="card-footer">
									<div class="submit-footer"><a href=""><i class="fa fa-picture-o"></i></a><a href=""><i class="fa fa-calendar"></i></a><a href=""><i class="fa fa-video-camera"></i></a></div>
									<span class="probutton">
										<button type="button" class="btn btn-primary pull-right btn-rounded">Send Message</button> 
									</span>
								</div>
							</div>
						</div>
						<div class="prophoto">
							<div class="card">

								<div class="card-header card-default">
									<h3 class="card-title"><img class="card-photo img-responsive img-circle" src="images/flat-avatar.png" alt="">
										Kumar Sanket <br><span class="text-muted">Posted on 3rd March 2014</span> 
									</h3>
								</div>
								<div class="card-block">
									<img class="img-responsive" src="images/colorful4.jpg" alt=""  style="width:100%;">
									<div class="comment-links clearfix">
										<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="prophoto">
							<div class="comment-link">
								<div class="card">

									<div class="card-header card-default">
										<h3 class="card-title"><img class="card-photo img-responsive img-circle" src="images/flat-avatar.png" alt="">
											Kumar Sanket <br><span class="text-muted">Posted on 3rd March 2014</span> 
										</h3>
									</div>
									<div class="card-block">
										<div class="lorem">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur harum aliquid tempore molestias nemo modi quas repellat. Accusantium praesentium, cupiditate tempore culpa voluptate laboriosam itaque error iste accusamus reprehenderit illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est saepe voluptas, eligendi necessitatibus adipisci soluta, amet magnam, rerum, iure minima fuga praesentium nobis veniam quisquam illum repellat beatae. Consectetur, asperiores.
										</div>
										<div class="comment-links clearfix">
											<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
										</div>
										<div class="comments-here media">
											<a class="pull-xs-left" href="javascript:void(0)">
												<img class="media-object img-circle img-responsive" src="images/flat-avatar.png" alt="Media Object">
											</a>
											<div class="media-body">
												<a href=""><h5 class="media-heading">Kumar Pratik</h5></a>
												<span class="timely pull-right text-muted"> 3 hours ago</span>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic repudiandae exercitationem provident nihil consectetur.
												<div class="comment-like"><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class=" col-sm-6 ">
						<div class="prophoto">
							<div class="card">
								<div class="card-header card-default">
									<h3 class="card-title"><img class="card-photo img-responsive img-circle" src="images/flat-avatar.png" alt="">
										Kumar Sanket <br><span class="text-muted">Posted on 3rd March 2014</span> 
									</h3>
								</div>
								<div class="card-block">
									<img class="img-responsive" src="images/colorful4.jpg" alt="" style="width:100%;">
									<div class="comment-links clearfix">
										<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

@stop