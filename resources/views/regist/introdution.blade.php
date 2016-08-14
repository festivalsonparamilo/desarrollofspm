@extends('profile/'.$participante)

@section('pasos')
	@if ($participante == 'musicos')
		<img class="img-responsive" src="/public/Img/paso01M.jpg">
	@elseif ($participante == 'talleristas')
		<img class="img-responsive" src="/public/Img/paso01T.jpg">
	@elseif ($participante == 'artesanos')
		<img class="img-responsive" src="/public/Img/paso01A.jpg">
	@elseif ($participante == 'gastronomos')
		<img class="img-responsive" src="/public/Img/paso01G.jpg">
	@endif
@endsection

@section('cuerpo')

	@if ($participante == 'musicos')
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
	@elseif ($participante == 'talleristas')
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-8 text-justify">
						<p><span class="glyphicon glyphicon-asterisk"></span>
						Podrán inscribirse ciudadanos que  tengan el deseo de compartir sus saberes y habilidades en el ámbito artesanal y  gastronómico a través de talleres que transmitan el interés por la cultura  tradicional de nuestro país.</p>
						<p><span class="glyphicon glyphicon-asterisk"></span>
						Para esta categoría sólo se  otorgarán 15 lugares con derecho a una cuota más baja para un stand y 5  adicionales exclusivos para talleristas sin stand.</p>
						<p><span class="glyphicon glyphicon-asterisk"></span>
						La selección estará sujeta a su  historial de participación en encuentros anteriores así como al impacto de la  propuesta, la cual deberá basarse en los siguientes criterios:</p>
						<p><strong>1 Qué tenga un fin educativo.</strong></p>
						<p><strong>2 Qué permita fortalecer  elementos culturales, artesanales y gastronómicos de las diferentes</strong><strong> regiones  del país.</strong></p>
						<p><strong>3 Qué atienda la diversidad,  equidad e inclusión de los participantes. </strong></p>
						<p><span class="glyphicon glyphicon-asterisk"></span>
						Aquellos que soliciten stand, deberán  cubrir con un mínimo de sesiones (asignadas por el Comité Organizador) para  hacer válido el descuento en la aportación económica por el stand a asignar.  Además, deberá tomar en cuenta que los espacios estarán condicionados a la  disposición de los mismos. </p>
						<p><span class="glyphicon glyphicon-asterisk"></span>
						Los interesados que sólo deseen  impartir su taller deben considerar que el Comité Organizador exclusivamente  otorga el espacio físico para 10 participantes por sesión. Mediante una cuota de recuperación que no debe rebasar los 40 pesos por asistente, podrán cubrir honorarios del tallerista. El número de sesiones a asignar serán mínimo 4, máximo 10.</p>
						<p>
						<strong class="resaltartex">MUY IMPORTANTE.</strong> Ésta es y será la única vía de inscripción para <span class="resaltartex"><strong>TODOS</strong></span> los expositores.</p>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
	@elseif ($participante == 'artesanos')
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-8 text-justify">
					<p><span class="glyphicon glyphicon-asterisk"></span> Podrán participar todos aquellos  ciudadanos que se dediquen a la elaboración, promoción, difusión y venta de  artesanías 100% mexicanas radicados en la ciudad de México y/o en cualquier  estado de la república.</p>
	  					<p><span class="glyphicon glyphicon-asterisk"></span> Para la asignación de lugares se  respetará el derecho de antigüedad de aquellos expositores que tengan como  mínimo cinco años continuos participando en el encuentro, a comprobarse en la  base de datos del Comité Organizador. </p>
					<strong class="resaltartex">MUY IMPORTANTE.</strong> Ésta es y será la única vía de inscripción para <span class="resaltartex"><strong>TODOS</strong></span> los expositores.  
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<div class="col-md-2"></div>
	@elseif ($participante == 'gastronomos')
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-8 text-justify">
					<p><span class="glyphicon glyphicon-asterisk"></span> Podrán participar todos aquellos  ciudadanos que se dediquen a la elaboración y venta de comida, antojitos y  bebidas tradicionales <strong>(sin alcohol)</strong> 100% típicas de cualquier región del país,  radicados en la Ciudad de México y/ en cualquier estado de la República  Mexicana.</p>
	  					<p><span class="glyphicon glyphicon-asterisk"></span> Para la asignación de lugares se  respetará el derecho de antigüedad de aquellos expositores que tengan como  mínimo cinco años continuos participando en el encuentro, a comprobarse en la  base de datos del Comité Organizador. </p>
					<strong class="resaltartex">MUY IMPORTANTE.</strong> Ésta es y será la única vía de inscripción para <span class="resaltartex"><strong>TODOS</strong></span> los expositores.  
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<div class="col-md-2"></div>
	@endif
	
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