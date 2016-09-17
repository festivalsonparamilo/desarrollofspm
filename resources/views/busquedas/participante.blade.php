@extends('busqueda')

@section('cuerpo')

@if ( isset($participante[0]))
<div class="row">
	<br>
	<br>
	<h2>Solo un participante</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row">
			<div class="text-center col-md-6">
				<table class="table table-full m-b-60">
					<tbody>
						<tr>
							<td><strong>Id: </strong></td>
							<td>{{ $participante[0]->id_participante }}</td>
						</tr>
						<tr>
							<td><strong>Edad: </strong></td>
							<td>{{ $participante[0]->edad }}</td>
						</tr>
						<tr>
							<td><strong>Telefono: </strong></td>
							<td>{{ $participante[0]->tel_casa }}</td>
						</tr>
						<tr>
							<td><strong>Celular: </strong></td>
							<td>{{ $participante[0]->tel_cel }}</td>
						</tr>
						<tr>
							<td><strong>Antiguedad: </strong></td>
							<td>{{ $participante[0]->antiguedad }}</td>
						</tr>
						<tr>
							<td><strong>Entrada: </strong></td>
							<td>{{ $participante[0]->entrada }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="text-center col-md-6">
				<table class="table table-full m-b-60">
					<tr>
						<td><strong>Nombre: </strong></td>
						<td>{{ $participante[0]->nombre }}</td>		
					</tr>
					<tr>
						<td><strong>Estado: </strong></td>
						<td>{{ $participante[0]->estado }}</td>		
					</tr>
					<tr>
						<td><strong>Ciudad: </strong></td>
						<td>{{ $participante[0]->ciudad }}</td>		
					</tr>
					<tr>
						<td><strong>Email: </strong></td>
						<td>{{ $participante[0]->e_mail }}</td>
					</tr>
					<tr>
						<td><strong>Categoria: </strong></td>
						<td>{{ $participante[0]->categoria }}</td>
					</tr>
					<tr>	
						<td><strong>Auxiliares: </strong></td>
						<td><a menu-link href="{{url('/auxiliar/'.$participante[0]->id_participante)}}" id="ver_auxiliar" name="ver_auxiliar" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="text-center col-md-8">
				<h4>Descripcion:</h4>
				<p>{{ $participante[0]->descripcion }}</p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
@else
	<div class="container">
		<div class="main row">
			<div class="col-xs-2 col-md-4"></div>
			<div class="col-xs-8 col-md-4">
				<img class="img-responsive" src="{{url('/Img/losentimoss.jpg')}}">
			</div>
			<div class="col-xs-2 col-md-4"></div>
		</div>
	</div>
@endif
@endsection