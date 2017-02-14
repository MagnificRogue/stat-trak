@extends('layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		<div class="inbox-container-wrap">
			<div class="inbox-container">
				<div class="col email-options ps-container">
					<div class="padding-15">
						<div class="butt-container">
						<a href="compose" class="btn btn-primary btn-block btn-rounded">
								Compose
						</a>
						</div>
						<ul class="main-options">

							<li class="activeli">
							<a href="inbox">
									<span class="title"> &nbsp; Inbox</span>
									<span class="label label-pill label-success badge-green pull-xs-right">10</span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Junk Mail</span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Drafts</span>
									<span class="label label-pill label-danger badge-red pull-xs-right">16</span>
								</a>	
							</li>

							<li>
								<a href="">
									<span class="title"> &nbsp; Sent</span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Trash</span>
								</a>	
							</li>

							<hr class="poor">
							<h5>LABELS</h5>
							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Clients <i class="fa fa-stop pull-right faorange"></i></span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Social <i class="fa fa-stop pull-right fayellow"></i></span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Family <i class="fa fa-stop pull-right facyan"></i></span>
								</a>	
							</li>

							<li>
							<a href="inbox">
									<span class="title"> &nbsp; Friends <i class="fa fa-stop pull-right fapurple"></i></span>
								</a>	
							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="compose-container">
				<div class="wrap-compose">
					<div class="mail-header">
						<h4>New Email</h4>
					</div>
					<div class="receipient">
						<strong class="to">TO </strong> <span class="label label-primary">john@doe.com</span>
					</div>
					<div class="subject">
						<strong class="strong-header">SUBJECT</strong> <strong class="subjetc">[LOGO] Envelope</strong>
					</div>
					<form class="editor">
				       	<textarea name="ckeditor" class="ckeditor" rows="10" cols="80">
				         	Edit here.
				       	</textarea>
				 	</form>
					<div class="send-footer">
						<button type="button" class="btn btn-primary btn-rounded    ">
						Send</button> 

						&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-paperclip"></i></a>
						<a href=""><i class="fa fa-trash-o pull-right"></i></a>
					</div>
				</div>
			</div>
		</div>	
	</div>
@stop