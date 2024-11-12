function actualizarUsuario(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional
  
    // Obtener los datos del formulario
    var usuario = document.getElementById("usuario").value;
  
    // Crear un objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();
  
    // Configurar la solicitud AJAX
    xhr.open("POST", "php/actu_usuario_be.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    // Definir la función que se ejecutará cuando se reciba la respuesta del servidor
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Actualizar los campos del formulario con los datos recibidos del servidor
        // Aquí puedes usar el código JavaScript que te proporcioné en la respuesta anterior
        // para asignar los valores a los campos del formulario
        eval(xhr.responseText); // Ejecuta el código JavaScript recibido del servidor
      }
    };
  
    // Enviar la solicitud AJAX con los datos del formulario
    xhr.send("usuario=" + usuario);
  }