const btn = document.getElementById('enviar');

const clave = document.getElementById('clave');

const usuario = document.getElementById('usuario');

const error = document.querySelector('.error');

error.style.color = '#30271C';

btn.addEventListener('click', (evt) => {
  evt.preventDefault();

  var mensajesError = [];

  if (clave.value === '' && usuario.value === '') {
    mensajesError.push('Los Campos estan vacios');
  } else if (usuario.value != 'RIAS' || clave.value != '123456') {
    mensajesError.push('Nombre de Usuario o Contraseña No Valido');

  }
  error.innerHTML = mensajesError.join('');
});
function pedido(){
  Swal.fire(
      'Good job!',
      'You clicked the button!',
      'success'
    )
  }
  /*
$('#enviar').click(envio);
function envio() {
  /*Evitar funciones in line*/
  /*
  $('#Opcion').on('change', function() {
    /*Asociamos cada case a un valor*/
    /*
    let mData = {
      1: 20,
      2: 10,
      3: 80,
      4: 60
    };

    let opcion = $('option:selected', this).val();
    let valor = $('#cantidad').val();
    let Nombre = $('option:selected', this).text();

    let postData = {
      cantidad: valor,
      Nombre: Nombre,
      Precio:mData[opcion],
      Total: valor * mData[opcion]
    };

    console.log(postData);

    $.ajax({
      url: '../php/procesos/insertarProductos.php',
      method: 'post',
      dataType: 'json',
      data: postData
    }).done(function(info) {
      console.log(info)
    })

  });

}
*/