@extends('busqueda')

@section('cuerpo')

@if ( isset($auxiliares[0]))
<div class="row">
	<br>
	<br>
	<h2>Auxiliares</h2>
	<div class="col-md-12">
		<table class="table table-full m-b-60" id="table-area-1">
			<thead>
    			<tr scroll-body="'#table-area-1'" scroll-stop="64">
          			<th>Id</th>
          			<th>Nombre</th>
          			<th>Numero de auxiliar</th>
          			<th>Entrada</th>
          			<th>Id Participante</th>
          			<th class="text-center">Ver</th>
    			</tr>
			</thead>
			<tbody>
	          	@foreach ($auxiliares as $aux)
	          	<tr>
					<td>{{ $aux->id_auxiliar }}</td>
		          	<td>{{ $aux->nombre_aux }}</td>
		          	<td>{{ $aux->num_aux }}</td>
		            <td>{{ $aux->entrada }}</td>
		            <td>{{ $aux->id_participante }}</td>
		            <td class="text-center">
						<a menu-link href="{{url('/auxiliar/'.$aux->id_auxiliar)}}" id="ver_auxiliar" name="ver_auxiliar" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a>
		            </td>
	          	</tr>
				@endforeach
	        </tbody>
		</table>
	</div>
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