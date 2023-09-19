$(document).ready(function () {
    $('#anemia_form').on('submit', function (e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: './php/insert.php',
            data: formData,
            success: function (response) {
                if (response === 'success') {
                    Swal.fire("¡Concluido!", "Los datos se guardaron correctamente.", "success")
                        .then(function () {
                            $("#exampleModal").modal("hide");
                            $("#anemia_form")[0].reset();
                            window.location.href = 'index.php';
                        });
                } else {
                    console.error('Error en la inserción');
                    Swal.fire("Error", "Hubo un error al guardar los datos.", "error");
                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
                Swal.fire("Error", "Hubo un error en la solicitud AJAX.", "error");
            }
        });
    });
});
