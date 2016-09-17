@extends('busqueda')

@section('cuerpo')


<div class="row">
	<br>
	<br>
	<h2>Solo un auxiliar</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row">
			<div class="text-center col-md-6">
				<table class="table table-full m-b-60">
					<tbody>
						<tr>
							<td><strong>Id: </strong></td>
							<td>{{ $auxiliar[0]->id_auxiliar }}</td>
						</tr>
						<tr>
							<td><strong>Numero de auxiliar: </strong></td>
							<td>{{ $auxiliar[0]->num_aux }}</td>
						</tr>
						<tr>
							<td><strong>Entrada: </strong></td>
							<td>{{ $auxiliar[0]->entrada }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="text-center col-md-6">
				<table class="table table-full m-b-60">
					<tr>
						<td><strong>Nombre: </strong></td>
						<td>{{ $auxiliar[0]->nombre_aux }}</td>		
					</tr>
					<tr>
						<td><strong>Id Participante: </strong></td>
						<td>{{ $auxiliar[0]->id_participante }}</td>		
					</tr>
					<tr>	
						<td><strong>Participante: </strong></td>
						<td><a menu-link href="{{url('/participante/'.$auxiliar[0]->id_participante )}}" id="ver_auxiliar" name="ver_auxiliar" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a></td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>
	<div class="col-md-2"></div>
</div>

@endsection