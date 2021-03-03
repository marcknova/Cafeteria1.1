const btn = document.getElementById('enviar');

const clave = document.getElementById('clave');

const usuario = document.getElementById('usuario');

const error = document.querySelector('.error');

error.style.color = '#30271C';

btn.addEventListener('click', (evt) => {
    evt.preventDefault();

    var mensajesError = [];

    if(clave.value === '' && usuario.value === ''){
        mensajesError.push('Los Campos estan vacios');


      }else if(usuario.value != 'RIAS' && clave.value != '123456'){
        mensajesError.push('Nombre de Usuario o Contraseña No Valido');


      }

      error.innerHTML = mensajesError.join('');

});