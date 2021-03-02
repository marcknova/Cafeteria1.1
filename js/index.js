let btn = document.getElementById('enviar');
let clave = document.getElementById('clave');
let usuario = document.getElementById('usuario');



btn.addEventListener('click', function(evt){

      if(clave.value === ''){
          console.log('El Campo Contraseña Es Obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value === ''){

          console.log('El Campo de Usuario Es Obligatorio')
          evt.preventDefault();
          return false;

      }else if(usuario.value != 'RIAS'){

        console.log('Nombre de Usuario No Valido')
          evt.preventDefault();
          return false;

      }else if(clave.value != '123456'){
          console.log("Contraseña Incorrecta");
        evt.preventDefault();
        return false;
      }
});