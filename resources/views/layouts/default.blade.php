<!DOCTYPE html>
<html>
<head>
	<title>Laracarte</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!--  font-awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<!-- Google Font -->

	<style type="text/css">
		body{ font-family: 'Open Sans', Helvetica, Arial; }
		footer { margin: 4em 0; }
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	@include('layouts.partials._nav')
	@yield('content')
	@include('layouts.partials._footer')

	<script type="text/javascript" src="https://code.jquery.com/git/jquery-3.x-git.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>