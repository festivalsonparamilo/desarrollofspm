@extends('busqueda')

@section('cuerpo')

<div class="row">
	<br>
	<br>
	<h2>Participantes</h2>
	<div class="col-md-12 table-responsive">
		<table class="table table-full m-b-60" id="table-area-1">
			<thead>
    			<tr scroll-body="'#table-area-1'" scroll-stop="64">
          			<th class="hidden-xs">Id</th>
          			<th>Nombre</th>
          			<th class="hidden-xs hidden-sm">Estado</th>
          			<th class="hidden-xs">Email</th>
          			<th class="hidden-xs hidden-sm">Antiguedad</th>
          			<th>Categoria</th>
          			<th>Entrada</th>
          			<th class="text-center">Ver</th>
          			<th class="text-center">Auxiliares</th>
    			</tr>
			</thead>
			<tbody>
	          <tr>
	          	@foreach ($participantes['Participantes'] as $part)
					<th class="hidden-xs">{{ $part->id_participante }}</td>
		          	<td>{{ $part->nombre }}</td>
		            <th class="hidden-xs hidden-sm">{{ $part->estado }}</td>
		            <th class="hidden-xs">{{ $part->e_mail }}</td>
		            <th class="hidden-xs hidden-sm">{{ $part->antiguedad }}</td>
		            <td>{{ $part->categoria }}</td>
		            <td>{{ $part->entrada }}</td>
		            <td class="text-center">
		            	<a menu-link href="{{url('/busqueda',$part->id_participante)}}" id="ver_participante" name="ver_participante" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a>	              
		            </td>
		            <td class="text-center">
		            	<a menu-link href="{{url('/rel/'.$part->id_participante)}}" id="ver_auxiliar" name="ver_auxiliar" class="btn btn-primary" ><i class="glyphicon glyphicon-eye-open"></i></a>
		            </td>
				@endforeach
	          </tr>
	        </tbody>
		</table>	
</div>

@endsection
