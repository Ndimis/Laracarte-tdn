@extends('layouts.default', ['title' => 'about'])

@section('content')
<div class="container">
	<h2>What is Laracarte ?</h2>
	<p>Laracarte is à clone of <a href="https://laramap.com">laramap.com</a></p>

	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
				<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by <a href="#">@etsmo</a> for learning proposes.</strong>
			</p>
		</div>
	</div>
	<p>Fell free to help to improve the <a href="https://github.com/Ndimis/Laracarte-tdn">code source</a></p>
	<hr>

	<h2>What is Laramap ?</h2>
	<p>Laramap is a website by which laracarte was inspired</p>
	<p>More info <a href="#">here</a></p>
	<hr>

	<h2>Which Tools and services are used in Laracarte ?</h2>
	<p>Basically it's built on laravel &amp; Bootstrap. But there's a bunch of services used for email and others sections</p>

	<ul>
		<li>Laravel</li>
		<li>Bootstrap</li>
		<li>Amazone S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antony Martin's geolocalisation package</li>
		<li>Michel Fortin's Markdown Parser Package</li>
		<li>Heroku</li>
		<li>Maury Ndimis</li>
	</ul>
</div>
@stop