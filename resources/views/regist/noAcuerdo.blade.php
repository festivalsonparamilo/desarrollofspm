@extends('profile/'.$participante)


@section('cuerpo')

<div class="col-md-2"></div>
<div class="col-md-8">
	<img class="img-responsive" src="/public/Img/gracias.jpg">
</div>
<div class="col-md-2"></div>

@endsection

@section('botones')

<div class="col-md-5"></div>
<div class="col-md-3">
	<a href="/"><img class="img-responsive" src="/public/Img/botsalir01.jpg" onmouseover="this.src='/public/Img/botsalir02.jpg'" onmouseout="this.src='/public/Img/botsalir01.jpg'"></a>
</div>

@endsection