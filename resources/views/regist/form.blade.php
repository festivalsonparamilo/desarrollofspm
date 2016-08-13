@extends('profile/'.$participante)

@section('pasos')
<img class="img-responsive" src="/public/Img/paso03M.jpg">
@endsection

@section('cuerpo')

<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-2"></div>
    <div class="col-md-8">
    	<form class="form-horizontal" id="form1" name="form1" method="post" onsubmit="return validar();" action="/registro/{{$participante}}/cond/ac/formMusico">
    		{!! csrf_field() !!}
      		<h4>Datos del Grupo</h4>

      		<div class="form-group">
            	<label class="control-label col-md-4" for="nombre_G">Nombre del grupo musical:</label>
            	<div class="col-md-8">
              		<input class="form-control" name="nombre_G" type="text" id="nombre_G" placeholder="Nombre del grupo:"></input>
            	</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="genero">Género musical:</label>
        		<div class="col-md-8">
          			<textarea class="form-control" name="genero" id="genero" cols="50" rows="6" style="resize: none;" placeholder="Género musical:"></textarea>
        		</div>
      		</div>

      		<h4>Datos del Director</h4>
      		<div class="form-group">
        		<label class="control-label col-md-4" for="nombre_C">Nombre:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="nombre_C" type="text" id="nombre_C" placeholder="Nombre:"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="apeido_PC">Apeido Paterno:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="apeido_PC" type="text" id="apeido_PC" placeholder="Apeido Paterno"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="apeido_MC">Apeido Materno:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="apeido_MC" type="text" id="apeido_MC" placeholder="Apeido Materno"></input>
        		</div>
      		</div>

      		<div class="form-group">
      			<label class="control-label col-md-4" for="edad">Edad:</label>
        		<div class="col-md-8">
          			<input name="edad" type="text" id="edad" class="form-control" placeholder="Edad:" />
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="estado">Estado:</label>
        		<div class="col-md-8">
          			<select class="select" name="estado" type="text" id="estado">
    		            <option value="">----------</option>
    		            <option value="Aguascalientes">Aguascalientes</option>
    		            <option value="Baja California">Baja California</option>
    		            <option value="Baja California Sur">Baja California Sur</option>
    		            <option value="Campeche">Campeche</option>
    		            <option value="Chiapas">Chiapas</option>
    		            <option value="Chihuahua">Chihuahua</option>
    		            <option value="Ciudad de México">Ciudad de México</option>
    		            <option value="Coahuila">Coahuila</option>
    		            <option value="Colima">Colima</option>
    		            <option value="Durango">Durango</option>
    		            <option value="Estado de México">Estado de México</option>
    		            <option value="Guanajuato">Guanajuato</option>
    		            <option value="Guerrero">Guerrero</option>
    		            <option value="Hidalgo">Hidalgo</option>
    		            <option value="Jalisco">Jalisco</option>
    		            <option value="Michoacán">Michoacán</option>
    		            <option value="Morelos">Morelos</option>
    		            <option value="Nayarit">Nayarit</option>
    		            <option value="Nuevo León">Nuevo León</option>
    		            <option value="Oaxaca">Oaxaca</option>
    		            <option value="Puebla">Puebla</option>
    		            <option value="Querétaro">Querétaro</option>
    		            <option value="Quintana Roo">Quintana Roo</option>
    		            <option value="San Luis Potosí">San Luis Potosí</option>
    		            <option value="Sinaloa">Sinaloa</option>
    		            <option value="Sonora">Sonora</option>
    		            <option value="Tabasco">Tabasco</option>
    		            <option value="Tamaulipas">Tamaulipas</option>
    		            <option value="Tlaxcala">Tlaxcala</option>
    		            <option value="Veracruz">Veracruz</option>
    		            <option value="Yucatán">Yucatán</option>
    		            <option value="Zacatecas">Zacatecas</option>
    		        </select>
    		    </div>
    		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="ciudad">Ciudad o Municipio:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="ciudad" type="text" id="ciudad" placeholder="Ciudad o Municipio"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="telefono">Telefono:</label>
        		<div class="col-md-8">
          			<input name="telefono" id="telefono" type="text" class="form-control" placeholder="Telefono:"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="celular">Celular:</label>
        		<div class="col-md-8">
          			<input name="celular" id="celular" type="text" class="form-control" placeholder="Celular:"></input>
        		</div>
      		</div>
        
        	<div class="form-group">
        		<label class="control-label col-md-4" for="correo">Correo:</label>
        		<div class="col-md-4">
    				<input class="form-control" id="nombrec" type="text" placeholder="Nombre:"></input>
    			</div>

    			<div class="input-group col-md-4">
    				<label class="sr-only" for="correo">Correo:</label>
    				<div class="input-group-addon">@</div>
    				<input class="form-control" id="correo" type="text" placeholder="Correo:"></input>
    			</div>
    		</div>
      
      		<div class="form-group">
        		<label class="control-label col-md-4" for="correo">Repetir Correo:</label>
        		<div class="col-md-4">
    				<input class="form-control" id="nombre2c" type="text" placeholder="Nombre:"></input>
    			</div>
    			<div class="input-group col-md-4">
    				<label class="sr-only" for="correo2">Correo:</label>
    				<div class="input-group-addon">@</div>
    				<input class="form-control" id="correo2" type="text" placeholder="Correo:"></input>
    			</div>
    		</div>

      		<h4>Datos del STAND</h4>
      		<div class="form-group">
        		<label class="control-label col-md-4" for="nombre">Nombre del reponsable:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="nombre" type="text" id="nombre" placeholder="Nombre del reponsable:"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="apeido_P">Apeido Paterno:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="apeido_P" type="text" id="apeido_P" placeholder="Apeido Paterno"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="apeido_M">Apeido Materno:</label>
        		<div class="col-md-8">
          			<input class="form-control" name="apeido_M" type="text" id="apeido_M" placeholder="Apeido Materno"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="participante">Número de Participantes:</label>
        		<div class="col-md-2">
          			<input class="form-control" name="participante" type="number" min="1" max="5" id="participante" placeholder="Número de Participantes:"></input>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="producto">Descripcion del producto:</label>
        		<div class="col-md-8">
          			<textarea class="form-control" name="producto" style="resize: none;" cols="50" rows="6" id="producto"></textarea>
        		</div>
      		</div>

      		<div class="form-group">
        		<label class="control-label col-md-4" for="milo">Años que ha participado en Son para Milo:</label>

        		<div>
    	          	<select class="select" name="milo" type="text" id="milo">
    		            <option value="">----------</option>
    		            <option value="1">Primer año</option>
    		            <option value="2">de 2 a 5 años</option>
    		            <option value="6">mas de 5 años</option>
    	            </select>
            	</div>
          	</div>

      		<div class="form-group">
        		<div class="col-md-4">
          			<input class="btn btn-primary form-control" type="submit"></input>
        		</div>
      		</div>
    	</form>
    </div>
        <div class="col-md-2"></div>
    </div>
  </div>
<div class="col-md-2"></div>
@endsection

@section('botones')
<div class="col-md-5"></div>
<div class="col-md-3">
	<a href="/"><img class="img-responsive" src="/public/Img/botsalir01.jpg" onmouseover="this.src='/public/Img/botsalir02.jpg'" onmouseout="this.src='/public/Img/botsalir01.jpg'"></a>
</div>

@endsection