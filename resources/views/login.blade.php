@extends('layouts.auth')

@section('page_title')
	Login
@stop

@section('section')
	<form role="form" action="/home" class="login-page-buttons">
		<div class="form-content">
			<fieldset class="form-group">
				<input type="text" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.email') }}>
			</fieldset>
			<fieldset class="form-group">
				<input type="password" class="form-control input-underline input-lg" id="" placeholder={{ Lang::get(\Session::get('lang').'.password') }}>
			</fieldset>
		</div>
		<input type="submit" class="btn btn-rounded btn-white p1025" value="{{ Lang::get(\Session::get('lang').'.login') }}" />
		&nbsp;
		<a href="/signup" class="btn btn-rounded btn-white p1025">{{ Lang::get(\Session::get('lang').'.register') }}</a> 
	</form>
@stop