// Función para mostrar el ID del paciente en la consola
function mostrarIdPaciente(event) {
    const listItem = event.target.closest(".patient-item");
    const id_paciente = listItem.getAttribute("data-id-paciente");
    
    // Realiza una solicitud AJAX para enviar el ID del paciente al servidor
    $.ajax({
        type: "GET", // Puedes usar POST o GET según tus necesidades
        url: "consulta.php", // URL de tu script PHP
        data: { idPaciente: id_paciente }, // Envía el ID como un parámetro llamado "idPaciente"
        success: function(response) {

            let iframeDocument = $('#consulta')[0].contentDocument || $('#consulta')[0].contentWindow.document;

            iframeDocument.open();
            iframeDocument.write(response);
            iframeDocument.close();

        },
        error: function(xhr, status, error) {
            console.error("Error en la solicitud AJAX:", error);
        }
    });
}

// Agrega eventos de clic a cada elemento de la lista
const patientItems = document.querySelectorAll(".patient-item");
patientItems.forEach(function(item) {
    item.addEventListener("click", mostrarIdPaciente);
});
