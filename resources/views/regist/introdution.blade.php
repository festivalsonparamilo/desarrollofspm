@extends('profile/'.$participante)

@section('pasos')
<img class="img-responsive" src="/public/Img/paso01M.jpg">
@endsection

@section('cuerpo')
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-2"></div>
			<div class="col-md-8 text-justify">
			<p><span class="glyphicon glyphicon-asterisk"></span> Podrán participar los grupos  de música, tanto locales como provenientes del interior de la república que así  lo deseen.</p>
			    <p><span class="glyphicon glyphicon-asterisk"></span> El comité organizador a asignado el 20% de stands a los grupos musicales que asi lo solicitén, <span class="resaltartex">siempre y cuando formen parte de la programación de esta emisión del  encuentro</span>, para la venta de artesanías o  alimentos 100% mexicanas, sujetándose a la distribución de espacios que el comité disponga.</p>
			    <p><strong class="resaltartex">MUY IMPORTANTE.</strong> Ésta es y será la única vía de inscripción para <span class="resaltartex"><strong>TODOS</strong></span> los participantes al encuentro.</p>
			</div>
        <div class="col-md-2"></div>
		</div>
	</div>
<div class="col-md-2"></div>

@endsection

@section('botones')
<div class="col-md-1"></div>
<div class="col-md-3">
	<a href="/registro"><img class="img-responsive" src="/public/Img/regresoA.jpg" onmouseover="this.src='/public/Img/regresoB.jpg'" onmouseout="this.src='/public/Img/regresoA.jpg'"></a>
</div>
<div class="col-md-4"></div>
<div class="col-md-3">
	<a href="/registro/{{$participante}}/cond"><img class="img-responsive" src="/public/Img/siguienteA.jpg" onmouseover="this.src='/public/Img/siguienteB.jpg'" onmouseout="this.src='/public/Img/siguienteA.jpg'"></a>
</div>
<div class="col-md-1"></div>
@endsection