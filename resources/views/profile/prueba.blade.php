@extends('formulario')

@section('cuerpo')
	@foreach ($part as $par)
	<li>
		{{ $par->nombre }}
	</li>
	@endforeach
@endsection