$(document).ready(function() {
// Capturamos el evento submit del formulario
$('#login_form').on('submit', function(e) {
    e.preventDefault(); // Prevenimos el envío tradicional del formulario
    
    // Serializamos los datos del formulario
    let formData = $(this).serialize();

    // Realizamos la petición AJAX
    $.ajax({
        type: 'POST',
        url: '../php/login1.php',
        data: formData,
        success: function(response) {   
            console.log("Response from server: " + response);
            if (response === "anemia") {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'La operación se ha completado correctamente.',
                    showConfirmButton: true,
                    onClose: function() {
                        // Redireccionar a una página después de que se cierre la alerta
                        window.location.href = '../anemia/index.php';
                    }
                });
            } else if (response === "hepatitisc"){
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'La operación se ha completado correctamente.',
                    showConfirmButton: false,
                    timer: 1500,
                    onClose: function() {
                        // Redireccionar a una página después de que se cierre la alerta
                        window.location.href = '#';
                    }
                });
            }else {
                // Caso en el que la respuesta es 0 (error)
                console.log('La respuesta es 0', response);
                
                // Mostrar una alerta de error con SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se produjo un error al procesar la solicitud.',
                    confirmButtonText: 'OK'
                });
            }
        },
        error: function(error) {
            // Aquí puedes manejar el error en la petición AJAX
            console.error('Error en la petición AJAX:', error);
    
            // Mostrar una alerta de error con SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se produjo un error al procesar la solicitud.',
                confirmButtonText: 'OK'
            });
    
            }
            
        });
    });
});