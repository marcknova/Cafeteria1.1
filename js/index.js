let btn = document.getElementById('enviar');
let clave = document.getElementById('clave');
let usuario = document.getElementById('usuario');
let error = document.querySelector('.error');
error.style.color = 'black';


btn.addEventListener('click', function(evt){
    evt.preventDefault();
    var mensajesError = [];
    if(clave.value === '' && usuario.value === ''){
        mensajesError.push('Los Campos estan vacios');

      }else if(usuario.value != 'RIAS'){

        mensajesError.push('Nombre de Usuario No Valido');

      }else if(clave.value != '123456'){
        mensajesError.push("Contraseña Incorrecta");

      }

      error.innerHTML = mensajesError.join();
});