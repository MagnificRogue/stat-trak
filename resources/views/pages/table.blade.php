@extends('layouts.dashboard')
@section('section')
	<pageheader pagename="Table" subtitle="Bootstrap UI Elements"></pageheader>
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-primary">
						Regular Table
					</div>
					<div class="card-block">
						<table class="table ">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card">
					<div class="card-header card-default">
						Bordered Table
					</div>
					<div class="card-block">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-info">
						Striped Table
					</div>
					<div class="card-block">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-success">
						Hover Table
					</div>
					<div class="card-block">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-danger">
						Condensed Table
					</div>
					<div class="card-block">
						<table class="table table-condensed">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="card card-inverse">
					<div class="card-header card-warning">
						Condensed, Bordered, Striped Table
					</div>
					<div class="card-block">
						<table class="table table-condensed table-bordered table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header card-default">
						Coloured Table
					</div>
					<div class="card-block">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-success success">
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr class="table-info info">
									<td>Andy</td>
									<td>andy@gmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr class="table-warning warning">
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
								<tr class="table-danger danger">
									<td>Rickie</td>
									<td>rickie@gmail.com</td>
									<td>Burnley, UK</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
	</div>
@stop