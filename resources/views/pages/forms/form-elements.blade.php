@extends('layouts.dashboard')
@section('section')
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-md-6 pr0">
				<div class="card card-inverse">
					<div class="card-header card-info">
						Default Form
					</div>
					<div class="card-block">
						<form>
							<fieldset class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</fieldset>
							<fieldset class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</fieldset>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-secondary">Submit</button>
						</form>
					</div>
				</div>

				<div class="card card-inverse">

					<div class="card-header card-success">
						Horizontal Form
					</div>
					<div class="card-block">
						<form class="form-horizontal">
							<fieldset class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</fieldset>
							<fieldset class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Remember me
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-secondary">Sign in</button> &nbsp; 
								</div>
							</fieldset>
						</form>
					</div>
				</div>

				<div class="card card-inverse">

					<div class="card-header card-primary">
						Inline Form
					</div>
					<div class="card-block">
						<form class="form-inline">
							<fieldset class="form-group">
								<label for="exampleInputName2">Name</label>
								<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
							</fieldset>
							<fieldset class="form-group">
								<label for="exampleInputEmail2">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
							</fieldset>
							<button type="submit" class="btn btn-secondary">Send invitation</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-inverse">

					<div class="card-header card-danger">
						Inline Underline Form
					</div>
					<div class="card-block">
						<form class="form-inline">
							<fieldset class="form-group">
								<label for="exampleInputName2">Name</label>
								<input type="text" class="form-control underline" id="exampleInputName2" placeholder="Jane Doe">
							</fieldset>
							<fieldset class="form-group">
								<label for="exampleInputEmail2">Email</label>
								<input type="email" class="form-control underline" id="exampleInputEmail2" placeholder="jane.doe@example.com">
							</fieldset>
							<button type="submit" class="btn btn-secondary">Send invitation</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card card-inverse">

					<div class="card-header card-warning">
						Underline Default Form
					</div>
					<div class="card-block">
						<form>
							<fieldset class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control underline" id="exampleInputEmail1" placeholder="Enter email">
							</fieldset>
							<fieldset class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control underline" id="exampleInputPassword1" placeholder="Password">
							</fieldset>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-secondary">Submit</button>
						</form>
					</div>
				</div>

				<div class="card card-inverse">

					<div class="card-header card-info">
						Horizontal Underline Form
					</div>
					<div class="card-block">
						<form>
							<fieldset class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control underline" id="inputEmail3" placeholder="Email">
								</div>
							</fieldset>
							<fieldset class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control underline" id="inputPassword3" placeholder="Password">
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Remember me
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-secondary">Sign in</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop