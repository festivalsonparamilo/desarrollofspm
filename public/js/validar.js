function validar(){ 
    valor=document.form1.value;
    var filter6="qwertyuiopñlkjhgfdsazxcvbnm QWERTYUIOPÑLKJHGFDSAZXCVBNMáéíóúÁÉÍÓÚ";
    var ax=0;
    var pal="";
    var c=0;
    if (document.form1.nombre.value.length==0){
       alert("Tiene que escribir su nombre");
       document.form1.nombre.focus();
       return false;
    }
    else
    {
      c=0;
      ax=document.form1.nombre.value.length;
      pal = document.form1.nombre.value;
      for (var i = 0; i < ax; i++) {
        for (var j = 0; j < filter6.length; j++) {
          if (pal[i]==filter6[j]) 
          {
            //alert(pal[i]+" "+i);
            c=c+1;
          }
        }
      }
      //alert(c);
      if (c!=ax) 
      {
        alert("Nombre no valido ingrese solo texto en su nombre");
        return false;
      }
    }
    
    if(document.form1.edad.value.length==0)
    {
      alert("Tiene que escribir su edad");
      document.form1.edad.focus();
      return false;
    }
    if(isNaN(document.form1.edad.value))
    {
      alert("Edad invalida");
      document.form1.edad.focus();
      return false;
    }
    if((document.form1.estado.selectedIndex)==0) 
    {
      alert("Selecciona tu estado de procedencia");
      document.form1.estado.focus();
      return false;
    }
    
    if((document.form1.telefono.value.length==0)&&(document.form1.celular.value.length==0)) 
    {
      alert("Debe poner al menos un numero telefonico local o celular");
      document.form1.telefono.focus();
      return false;
    }
    else
    {
      if (document.form1.telefono.value.length!=0) 
      {
        if (isNaN(document.form1.telefono.value))
        {
          alert("telefono invalido ingrese solo numeros");
          document.form1.telefono.focus();
          return false;
        }
      }
      if (document.form1.celular.value.length!=0) 
      {
        if (isNaN(document.form1.celular.value))
        {
          alert("telefono celular invalido ingrese solo numeros");
          document.form1.celular.focus();
          return false;
        }
      }
    }
    var com = "qwertyuioplkjhgfdsazxcvbnm._-1234567890";
    
    ax=document.form1.correo.value.length;
    pal=document.form1.correo.value;
    c=0;
    var pos=[];
    if (ax!=0) 
    {
      for (var k = 0; k < ax; k++) {
        if (pal[k]=='@'||pal[k]=='.') 
        {
          c=c+1;
          if (pal[k]=='@'||((pos.length>0)&&(pal[k]=='.'))) 
          {
            pos.push(k);
          }
        }
      }
      //alert(pos);
      //alert(pal.length + " " +pos[(pos.length)-1]);
      if (c<2||(pos.length)>3) 
      {
        
        alert("Correo electronico incorrecto ");
        document.form1.correo.focus;
        return false;
      }
      else
      {
        c=0;
        for (var i = 0; i <pos[0] ; i++) {
          for (var j = 0; j < com.length; j++) {
            if (pal[i]==com[j]) 
            {
              c = c+1;
            }
          }
        }
        //alert(c);
        if (c!=(pos[0])) 
        {
          alert("Correo electronico incorrecto ");
          document.form1.correo.focus;
          return false;
        }
        //alert(pal.length + " " +pos[(pos.length)-1]);
        if (((pal.length-1)-(pos[(pos.length)-1]))==0) 
        {
          alert("Correo electronico incorrecto ");
          document.form1.correo.focus;
          return false;
        }
      }
    }
    if (document.form1.nombre_G) 
    {
      if (document.form1.nombre_G.value.length==0){
       alert("Tiene que escribir el nombre del grupo");
       document.form1.nombre_G.focus();
       return false;
      }
    }
    if (document.form1.nombre_C) 
    {
      c=0;
      if (document.form1.nombre_C.value.length==0){
       alert("Tiene que escribir el nombre del responsable");
       document.form1.nombre_C.focus();
       return false;
      }
      else
      {
        c=0;
        ax=document.form1.nombre_C.value.length;
        pal = document.form1.nombre_C.value;
        for (var i = 0; i < ax; i++) {
          for (var j = 0; j < filter6.length; j++) {
            if (pal[i]==filter6[j]) 
            {
              //alert(pal[i]+" "+i);
              c=c+1;
            }
          }
        }
        //alert(c);
        if (c!=ax) 
        {
          alert("Nombre no valido ingrese solo texto en su nombre");
          return false;
        }
      }
    }
    if (document.form1.titulo) 
    {
      c=0;
      if (document.form1.titulo.value.length==0){
       alert("Tiene que escribir el nombre del taller");
       document.form1.titulo.focus();
       return false;
      }
      else
      {
        c=0;
        ax=document.form1.titulo.value.length;
        pal = document.form1.titulo.value;
        for (var i = 0; i < ax; i++) {
          for (var j = 0; j < filter6.length; j++) {
            if (pal[i]==filter6[j]) 
            {
              //alert(pal[i]+" "+i);
              c=c+1;
            }
          }
        }
        //alert(c);
        if (c!=ax) 
        {
          alert("Nombre no valido ingrese solo texto en el nombre del taller");
          return false;
        }
      }
      if ((!document.form1.info_ninos.checked)&&(!document.form1.info_jovenes.checked)&&(!document.form1.info_adultos.checked)&&(document.form1.rango.value.length==0)) 
      {
        alert("Defina un rango de edad, precionando las opciones niño, joven, adulto o introduciendo el rango de edad");
        document.form1.info_ninos.focus();
        return false;
      }
      if ((document.form1.stand.selectedIndex)==0) 
      {
        alert("Si necesita STAND indiquenos porfavor");
        document.form1.stand.focus();
        return false
      }
    }

    return true;
  }