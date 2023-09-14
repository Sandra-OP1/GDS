$(document).ready(function () {
    $('#edit_form').on('submit', function (e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: './php/update.php',
            data: formData,
            success: function (response) {
                console.log('Respuesta del servidor:', response);
                // Verifica si la respuesta es 'success' (asegúrate de que sea exactamente igual a 'success')
                if (response === 'success') {
                    Swal.fire("¡Concluido!", "Los datos se guardaron correctamente.", "success")
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '../anemia/index.php';
                            }
                        });
                } else {
                    console.error('Error en la inserción'); // Asegúrate de que este mensaje se muestre en la consola
                    // Muestra la alerta SweetAlert para el caso de error
                    Swal.fire("Error", "Hubo un error al guardar los datos.", "error");
                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error); // Asegúrate de que este mensaje se muestre en la consola
                // Muestra la alerta SweetAlert para el caso de error en la solicitud AJAX
                Swal.fire("Error", "Hubo un error en la solicitud AJAX.", "error");
            }
        });
    });
});
