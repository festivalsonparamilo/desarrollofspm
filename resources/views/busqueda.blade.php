<!DOCTYPE html>
<html>
<head>
	<title>Son para Milo 2016</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap-theme.css')}}">
	
</head>
<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-0 col-md-1"></div>
				<div class="col-sm-12 col-md-10">
					<img class="img-responsive" src="{{url('/Img/cabezamilo2016.jpg')}}">
				</div>
				<div class="col-sm-0 col-md-1"></div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="main row">
			<br>
			<br>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form class="" action="{{ url('/busqueda')}}" method="post">
					{!! csrf_field() !!}
					<div class="form-group">
						<div class="col-xs-2 "></div>
						<div class="col-xs-6">
							<input type="text" placeholder="Buscar" class="form-control" name="buscar" id="buscar">
						</div>
						<div class=" col-xs-4">
							<button type="submit" id="b1" name="b1" class="btn btn-primary" data-title="Buscar"><span class="glyphicon glyphicon-search"></span></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>

		@yield('cuerpo')

		<footer>
			<div class="container">
				
			</div>
		</footer>

	<script type="text/javascript" src="{{ url('/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
</body>
</html>