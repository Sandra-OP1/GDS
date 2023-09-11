//cambiar el curp a mayusculas
const curpInput = document.getElementById('curp');

curpInput.addEventListener('blur', function() {
  this.value = this.value.toUpperCase();
});


// Función para cambiar la primera letra de cada palabra a mayusculas para que quede como nombre personal:
function capitalizeWords(str) {
    return str.replace(/(?:^|\s)\S/g, function(a) {
      return a.toUpperCase();
    });
  }
  
  const nombreInput = document.getElementById('nombre');
  
  nombreInput.addEventListener('blur', function() {
    this.value = capitalizeWords(this.value);
  });



// Función para calcular datos desde el CURP
function curp2date() {
    // Obtener el valor del CURP ingresado
    var curp = document.getElementById("curp").value;

    // Extraer la fecha de nacimiento y el sexo del CURP
    var fechaNacimiento = curp.substr(4, 6);
    var sexo = curp.substr(10, 1);

    // Calcular la fecha de nacimiento completa
    var year = fechaNacimiento.substr(0, 2);
    var month = fechaNacimiento.substr(2, 2);
    var day = fechaNacimiento.substr(4, 2);

    // Obtener la fecha actual
    var fechaActual = new Date();

    // Calcular la fecha de nacimiento completa considerando el siglo
    var birthYear = parseInt(year) < parseInt(fechaActual.getFullYear().toString().substr(2, 2))
        ? parseInt("20" + year)
        : parseInt("19" + year);
    var fechaNac = new Date(birthYear, month - 1, day);

    // Calcular la edad
    var edad = fechaActual.getFullYear() - fechaNac.getFullYear();

    // Ajustar la edad si el mes actual es anterior al mes de nacimiento o si es el mismo mes pero el día actual es anterior al día de nacimiento
    if (
        (fechaActual.getMonth() < fechaNac.getMonth()) ||
        (fechaActual.getMonth() === fechaNac.getMonth() && fechaActual.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }

    // Mostrar la edad en el campo correspondiente
    document.getElementById("edad").value = edad;

    // Formatear la fecha de nacimiento para mostrarla en el campo correspondiente
    var fechaCompleta = fechaNac.getFullYear() + "-" + month + "-" + day;
    document.getElementById("fecha").value = fechaCompleta;

    // Determinar el sexo y mostrarlo en el campo correspondiente
    if (sexo === "H") {
        document.getElementById("sexo").value = "Hombre";
    } else if (sexo === "M") {
        document.getElementById("sexo").value = "Mujer";
    }
}







//Script para calcular IMC
function calculaIMC() {
    const tallaInput = document.getElementById('talla');
    const pesoInput = document.getElementById('peso');
    const imcInput = document.getElementById('imc');
    const descripcionInput = document.getElementById('imcdescripcion');

    const talla = parseFloat(tallaInput.value.replace(',', '.'));
    const peso = parseFloat(pesoInput.value);
    
    if (talla && peso) {
        const imc = peso / (talla * talla);
        const descripcion = obtenerDescripcionIMC(imc);
        
        imcInput.value = imc.toFixed(2);
        descripcionInput.value = descripcion;
    } else {
        imcInput.value = '';
        descripcionInput.value = '';
    }
}

function obtenerDescripcionIMC(imc) {
    if (imc < 18.5) {
        return 'Bajo peso';
    } else if (imc >= 18.5 && imc < 25) {
        return 'Peso normal';
    } else if (imc >= 25 && imc < 30) {
        return 'Sobrepeso';
    } else if (imc >= 30 && imc < 35) {
        return 'Obesidad grado I';
    } else if (imc >= 35 && imc < 40) {
        return 'Obesidad grado II';
    } else {
        return 'Obesidad grado III';
    }
}

//modal

function mostrarOcultarCampos() {
    var seleccion = document.getElementById("sacaratoferrico").value;
    var dosisDiv = document.getElementById("iddosissacaratoferrico");
    var nodosisDiv = document.getElementById("idnodosissfpre");

    if (seleccion === "Si") {
        dosisDiv.style.display = "block";  // Mostrar el campo de dosis
        nodosisDiv.style.display = "block";  // Mostrar el campo de dosis
    } else {
        dosisDiv.style.display = "none";   // Ocultar el campo de dosis
        nodosisDiv.style.display = "none";   // Ocultar el campo de dosis
    }
}

// Llama a la función al cargar la página para manejar la visibilidad inicial.
mostrarOcultarCampos();



function mostrarOcultarCamposCF() {
    var seleccion = document.getElementById("carboximaltosaferrica").value;
    var dosisDiv = document.getElementById("iddosiscarboximaltosaferrica");
    var nodosisDiv = document.getElementById("idnocarboximaltosaferrica");

    if (seleccion === "Si") {
        dosisDiv.style.display = "block";  // Mostrar el campo de dosis
        nodosisDiv.style.display = "block";  // Mostrar el campo de dosis
    } else {
        dosisDiv.style.display = "none";   // Ocultar el campo de dosis
        nodosisDiv.style.display = "none";   // Ocultar el campo de dosis
    }
}

// Llama a la función al cargar la página para manejar la visibilidad inicial.
mostrarOcultarCamposCF();



//Atención médica
//Previa Aplicación de Hierro - Hierro dextrano
//Si se selecciona Sí en Hierro dextrano, se muestran los campos Dosis Hierro dextrano y No. Dosis Hierro dextrano, en caso contrario se deben ocultar.

function mostrarOcultarCamposHierro() {
    var hierroDextranoSelect = document.getElementById("hierrodextrano");
    var dosisHierroDiv = document.getElementById("iddosishierro");
    var nodosisHierroDiv = document.getElementById("idnodosishierrodextrano");

    if (hierroDextranoSelect.value === "Si") {
        dosisHierroDiv.style.display = "block";
        nodosisHierroDiv.style.display = "block";
    } else if (hierroDextranoSelect.value === "No") {
        dosisHierroDiv.style.display = "none";
        nodosisHierroDiv.style.display = "none";
    } else {
        dosisHierroDiv.style.display = "none";
        nodosisHierroDiv.style.display = "none";
    }
}

function mostrarOcultarCamposPremedicacion() {
    var PremedicacionSelect = document.getElementById("premedicacion");
    var medicamentoDiv = document.getElementById("idmedicamento");

    if (PremedicacionSelect.value === "Si") {
        medicamentoDiv.style.display = "block";
    } else if (PremedicacionSelect.value === "No") {
        medicamentoDiv.style.display = "none";
    } else {
        medicamentoDiv.style.display = "none";
    }
}

// Obtener elementos necesarios
const checkboxes = document.querySelectorAll('.ra-checkbox');
const gradoReaccionDiv = document.getElementById('grado-reaccion');

// Agregar un evento a los checkboxes
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        // Verificar si uno de los checkboxes seleccionados está marcado
        const algunCheckboxSeleccionado = Array.from(checkboxes).some(function(cb) {
            return cb.checked;
        });

        // Mostrar u ocultar la sección "Grado Reacción Adversa" según la condición
        gradoReaccionDiv.style.display = algunCheckboxSeleccionado ? 'block' : 'none';
    });
});



//check de componentes en transfusiones
document.addEventListener("DOMContentLoaded", function () {
    var ningunoCheckbox = document.getElementById("ninguncomponente");
    var plasmaCheckbox = document.getElementById("plasma");
    var plaquetasCheckbox = document.getElementById("plaquetas");
    var crioprecipitadosCheckbox = document.getElementById("Crioprecipitados");
    var paqueteGlobularCheckbox = document.getElementById("PaqueteGlobular");

    var componentePlasma = document.getElementById("idcomponenteplasma");
    var componentePlaquetas = document.getElementById("idcomponenteplaquetas");
    var componenteCrioprecipitados = document.getElementById("idcomponenteCrioprecipitados");
    var componentePG = document.getElementById("idcomponentePG");

    function actualizarCampos() {
        if (ningunoCheckbox.checked) {
            plasmaCheckbox.checked = false;
            plaquetasCheckbox.checked = false;
            crioprecipitadosCheckbox.checked = false;
            paqueteGlobularCheckbox.checked = false;

            componentePlasma.style.display = "none";
            componentePlaquetas.style.display = "none";
            componenteCrioprecipitados.style.display = "none";
            componentePG.style.display = "none";
        } else {
            componentePlasma.style.display = plasmaCheckbox.checked ? "block" : "none";
            componentePlaquetas.style.display = plaquetasCheckbox.checked ? "block" : "none";
            componenteCrioprecipitados.style.display = crioprecipitadosCheckbox.checked ? "block" : "none";
            componentePG.style.display = paqueteGlobularCheckbox.checked ? "block" : "none";
        }
    }

    ningunoCheckbox.addEventListener("change", actualizarCampos);
    plasmaCheckbox.addEventListener("change", actualizarCampos);
    plaquetasCheckbox.addEventListener("change", actualizarCampos);
    crioprecipitadosCheckbox.addEventListener("change", actualizarCampos);
    paqueteGlobularCheckbox.addEventListener("change", actualizarCampos);

    actualizarCampos();
});


//====================Durante Procedimiento====================//

// tipo cirugía

function mostrarFechaCirugiaTipo() {
    var seleccion = document.getElementById("cirugia").value;
    var divFechaCirugia = document.getElementById("idfechacirugia");

    if (seleccion === "Si") {
        divFechaCirugia.style.display = "block";
    } else {
        divFechaCirugia.style.display = "none";
    }
}

//césarea

function mostrarFechaCesarea() {
    var cesareaSelect = document.getElementById("cesarea");
    var fechaCesareaDiv = document.getElementById("idfechacesarea");

    if (cesareaSelect.value === "Si") {
        fechaCesareaDiv.style.display = "block";
    } else {
        fechaCesareaDiv.style.display = "none";
    }
}

// hemorragia masiva

function mostrarCantidadSangrado() {
    var HemorragiaMasivaSelect = document.getElementById("HemorragiaMasiva");
    var cantidadsangradoDiv = document.getElementById("idcantidadsangrado");

    if (HemorragiaMasivaSelect.value === "Si") {
        cantidadsangradoDiv.style.display = "block";
    } else {
        cantidadsangradoDiv.style.display = "none";
    }
}


function mostrarTransfusion() {
    var seleccion = document.getElementById("Transfusion").value;
    var checkboxesContainer = document.getElementById("checkboxes-container");

    if (seleccion === "Si") {
        checkboxesContainer.style.display = "block";
    } else {
        checkboxesContainer.style.display = "none";
    }
}

//=========================POST INFUSIÓN=================================//
//sacarato ferrico post

function mostrarOcultarCamposPost(){
    

    if (sacaratoferricopostSelect.value === "Si") {
        dosisscaratoferricopostDiv.style.display = "block";
    } else if (sacaratoferricopostSelect.value === "No") {
        dosisscaratoferricopostDiv.style.display = "none";
    } else {
        dosisscaratoferricopostDiv.style.display = "none";
    }
}

//Sacarato férrico - Post Infusión

function mostrarOcultarCamposPost() {
    var sacaratoferricopostSelect = document.getElementById("sacaratoferricopost");
    var dosisscaratoferricopostDiv = document.getElementById("iddosissacaratoferricopost");
    var nodosissacaratoferricopostDiv = document.getElementById("idnodosissacaratoferricopost");
    

    if (sacaratoferricopostSelect.value === "Si") {
        dosisscaratoferricopostDiv.style.display = "block";
        nodosissacaratoferricopostDiv.style.display = "block";
    } else if (sacaratoferricopostSelect.value === "No") {
        dosisscaratoferricopostDiv.style.display = "none";
        nodosissacaratoferricopostDiv.style.display = "none";
    } else {
        dosisscaratoferricopostDiv.style.display = "none";
        nodosissacaratoferricopostDiv.style.display = "none";
    }
}

//Carboximaltosa férrica - Post Infusión


function mostrarOcultarCamposCarboPost() {
    var carboximaltosaferricapostSelect = document.getElementById("carboximaltosaferricapost");
    var dosiscarboximaltosaferricapostDiv = document.getElementById("iddosiscarboximaltosaferricapost");
    var nocarboximaltosaferricapostDiv = document.getElementById("idnocarboximaltosaferricapost");
    

    if (carboximaltosaferricapostSelect.value === "Si") {
        dosiscarboximaltosaferricapostDiv.style.display = "block";
        nocarboximaltosaferricapostDiv.style.display = "block";

    } else if (carboximaltosaferricapostSelect.value === "No") {
        dosiscarboximaltosaferricapostDiv.style.display = "none";
        nocarboximaltosaferricapostDiv.style.display = "none";

    } else {
        dosiscarboximaltosaferricapostDiv.style.display = "none";
        nocarboximaltosaferricapostDiv.style.display = "none";
    }
}


// Hierro dextrano - Post Infusión

function mostrarOcultarCamposHierroDexPost() {
    var hierrodextranopostSelect = document.getElementById("hierrodextranopost");
    var dosishierropostDiv = document.getElementById("iddosishierropost");
    var nodosishierropostDiv = document.getElementById("idnodosishierrodextranopost");
    

    if (hierrodextranopostSelect.value === "Si") {
        dosishierropostDiv.style.display = "block";
        nodosishierropostDiv.style.display = "block";

    } else if (hierrodextranopostSelect.value === "No") {
        dosishierropostDiv.style.display = "none";
        nodosishierropostDiv.style.display = "none";

    } else {
        dosishierropostDiv.style.display = "none";
        nodosishierropostDiv.style.display = "none";
    }
}

//Premedicacion -Post Infusión


function mostrarOcultarCamposPostPremedicacion() {
    var premedicacionpostSelect = document.getElementById("premedicacionpost");
    var medicamentopostDiv = document.getElementById("idmedicamentopost");

    if (premedicacionpostSelect.value === "Si") {
        medicamentopostDiv.style.display = "block";
    } else if (premedicacionpostSelect.value === "No") {
        medicamentopostDiv.style.display = "none";
    } else {
        medicamentopostDiv.style.display = "none";
    }
}
