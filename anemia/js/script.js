/*document.addEventListener("DOMContentLoaded", function () {
    // Obtén la lista de pacientes y el campo de búsqueda
const patientList = document.getElementById("patient-list");
const searchInput = document.getElementById("search");

// Escucha el evento de entrada en el campo de búsqueda
searchInput.addEventListener("input", () => {
    const searchText = searchInput.value.toLowerCase();
    const patientItems = patientList.querySelectorAll("li");

    // Itera sobre los elementos de la lista de pacientes
    patientItems.forEach((item) => {
        const patientName = item.textContent.toLowerCase();
        if (patientName.includes(searchText)) {
            // Si el nombre del paciente coincide con la búsqueda, muestra el elemento
            item.style.display = "block";
        } else {
            // Si no coincide, oculta el elemento
            item.style.display = "none";
        }
    });
});
});
*/

document.addEventListener("DOMContentLoaded", function () {
    const patientList = document.getElementById("patient-list");
    const searchInput = document.getElementById("search");

    // Escucha el evento de entrada en el campo de búsqueda
    searchInput.addEventListener("input", () => {
        const searchText = searchInput.value.toLowerCase();
        const patientItems = patientList.querySelectorAll("li");

        // Itera sobre los elementos de la lista de pacientes
        patientItems.forEach((item) => {
            const patientName = item.textContent.toLowerCase();
            if (patientName.includes(searchText)) {
                // Si el nombre del paciente coincide con la búsqueda, muestra el elemento
                item.style.display = "block";
            } else {
                // Si no coincide, oculta el elemento
                item.style.display = "none";
            }
        });
    });

    // Agrega eventos click a los botones "ver" y "editar"
    patientList.addEventListener("click", (event) => {
        const target = event.target;
        if (target.classList.contains("view-button")) {
            // Lógica para la acción "ver" aquí
            const patientItem = target.parentElement;
            const patientName = patientItem.textContent.trim().split(" ")[0];
            alert(`Ver detalles de ${patientName}`);
        } else if (target.classList.contains("edit-button")) {
            // Lógica para la acción "editar" aquí
            const patientItem = target.parentElement;
            const patientName = patientItem.textContent.trim().split(" ")[0];
            alert(`Editar información de ${patientName}`);
        }
    });
});
