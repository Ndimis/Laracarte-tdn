@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get in touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="{{config('laracarte.admin_support_email')}}"> ask for help.</a></p>

			<form action="{{route('store')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group{{$errors->has('name')?'has-error':''}}">
					<label for="name" class="control-label">Name</label>
					<input type="text" class="form-control" name="name" id="name" required="required" value="{{old('name')}}">
					{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
					<label for="email" class="control-label">Email</label>
					<input type="email" class="form-control" name="email" id="email" required="required" value="{{old('email')}}">
					{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
					<label for="message" class="control-label sr-only">Message</label>
					<textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message">{{old('message')}}</textarea>
					{!! $errors->first('message', '<span class="help-block">:message</span>')!!}
				</div>
				<br>
				<div class="form-group">
					<button class="btn btn-primary btn-block" type="submit">submit query &raquo;</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop