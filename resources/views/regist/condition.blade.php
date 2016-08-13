@extends('profile/'.$participante)

@section('pasos')
<img class="img-responsive" src="/public/Img/paso02M.jpg">
@endsection

@section('cuerpo')
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-2"></div>
			<div class="col-md-8 text-justify" id="texto">
				<p class="resaltartex">Cumplir con todos y cada uno de  los requisitos:</p>
				
				        <p><strong>1) Llenar formato de registro </strong></p>
				        <p><strong>2) Entregar copia de  identificación oficial con fotografía del músico responsable, así como de la  persona que se hará cargo del stand y de su equipo de trabajo, el día <del>7 de  mayo.</del></strong></p>
				        <p><strong>3) Los productos artesanales  deberán ser 100% mexicanos, los precios deberán ajustarse al criterio de la  economía solidaria y en ambos casos ser sujetos a comprobación y verificación  por los organizadores.</strong></p>
				        <p><strong>4) Firmar carta compromiso y  entregar el día de la reunión.</strong></p>
				        <p><strong><del>5) Asistir a las juntas  programadas por el Comité Organizador. La primera se llevará a cabo el sábado 7  de mayo del presente año, a las 10 AM, en el Deportivo Plan Sexenal.</del></strong></p>
				        <p><strong>6) Utilizar exclusivamente las  vías de comunicación asignadas al Comité de Expositores: </strong></p>
				<p><strong>Correo electrónico: festivalsonparamilo@gmail.com<br />
				          Cel. (044) 5536596742<br />
				          Horarios de atención: De 17 a 21:00 hrs.<br />
				          <span class="resaltartex">Atención: Rodrigo Rojas </span>Coordinador programación</strong></p>
				      
			</div>
        <div class="col-md-2"></div>
		</div>
	</div>
<div class="col-md-2"></div>
@endsection

@section('botones')
<div class="col-md-1"></div>
<div class="col-md-3">
	<a href="/registro/{{$participante}}/cond/noAc"><img class="img-responsive" src="/public/Img/Noacuerdo01.jpg" onmouseover="this.src='/public/Img/Noacuerdo02.jpg'" onmouseout="this.src='/public/Img/Noacuerdo01.jpg'"></a>
</div>
<div class="col-md-4"></div>
<div class="col-md-3">
	<a href="/registro/{{$participante}}/cond/ac"><img class="img-responsive" src="/public/Img/acuerdo01.jpg" onmouseover="this.src='/public/Img/acuerdo02.jpg'" onmouseout="this.src='/public/Img/acuerdo01.jpg'"></a>
</div>
<div class="col-md-1"></div>
@endsection