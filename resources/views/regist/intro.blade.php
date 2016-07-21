<h1>{{$participante}}</h1>
@if( $participante == 'musicos')

	@extends('musicos')
@endif

@if( $participante == 'tallerista')

	@extends('tallerista')
@endif

@if( $participante == 'arte-gast')

	@extends('arte-gast')

@endif

@section('cuerpo')

    <div id="punto"></div>
    <div id="punto"></div>
    <div id="texto1">
		<p>Podrán participar los grupos  de música, tanto locales como provenientes del interior de la república que así  lo deseen.</p>
		<p>El comité organizador a asignado el 20% de stands a los grupos musicales que asi lo solicitén, <span class="resaltartex">siempre y cuando formen parte de la programación de esta emisión del  encuentro</span>, para la venta de artesanías o  alimentos 100% mexicanas, sujetándose a la distribución de espacios que el comité disponga.</p>
		<p><strong class="resaltartex">MUY IMPORTANTE.</strong> Ésta es y será la única vía de inscripción para <span class="resaltartex"><strong>TODOS</strong></span> los participantes al encuentro.</p>
    </div>

@endsection

@section('botones')
	<a href="/" target="_self"><div id="botregreso"></div></a>
	<a href="/formularioPrueba/condiciones" target="_self"><div id="botsiguiente"></div></a>

@endsection