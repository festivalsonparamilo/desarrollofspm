@extends('busqueda')

@section('cuerpo')
@if ( isset($expositores['Participantes'][0]) ||isset($expositores['Auxiliares'][0]) )
<div class="row">
	<br>
	<br>
	<h2>Para diferentes categorias</h2>
	<div class="col-md-12 table-responsive">
		<table class="table table-full m-b-60" id="table-area-1">
			<thead>
    			<tr scroll-body="'#table-area-1'" scroll-stop="64">
          			<th>Id</th>
          			<th>Nombre</th>
          			<th>Email</th>
          			<th>Categoria</th>
          			<th class="text-center">Ver</th>
    			</tr>
			</thead>
			<tbody>
	          	@foreach ($expositores['Participantes'] as $part)
	          	<tr>
					<td>{{ $part->id_participante }}</td>
		          	<td>{{ $part->nombre }}</td>
		            <td>{{ $part->e_mail }}</td>
		            <td>{{ $part->categoria }}</td>
		            <td class="text-center">
		            	<a menu-link href="{{url('/participante/'.$part->id_participante)}}" id="ver" name="ver" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a>
		            </td>
	          	</tr>
				@endforeach
	          	@foreach ($expositores['Auxiliares'] as $aux)
	          	<tr>
					<td>{{ $aux->id_auxiliar }}</td>
		          	<td>{{ $aux->nombre_aux }}</td>
		            <td>-----</td>
		            <td>-----</td>
		            <td class="text-center">
		            	<a menu-link href="{{url('/auxiliar/'.$aux->id_auxiliar)}}" id="ver" name="ver" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a>
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
