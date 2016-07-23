@extends($participante)


@section('cuerpo')

    <div>
    Condiciones
    </div>

@endsection

@section('botones')
	<a href="/" target="_self"><div id="botregreso">home</div></a>
	<a href="/registro/{{$participante}}/cond/ac" target="_self"><div id="botsiguiente">sig</div></a>

@endsection