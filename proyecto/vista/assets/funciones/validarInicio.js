// Referencia a los elementos
// Contantes para el nombre
const divNombre = document.getElementById("validacionNombre");
const nombreInvalido = document.getElementById("nombreInvalid");
const nombreValido = document.getElementById("nombreValid");
// Contantes para el apellido
const divApellido = document.getElementById("validacionApellido");
const apellidoInvalido = document.getElementById("apellidoInvalid");
const apellidoValido = document.getElementById("apellidoValid");


// Función para ejecutar la validación 
function validar() {
    // Inicializo mi bandera como true
    let esValido = true; 
    // Guardo el valor del input
    const nombre = divNombre.value.trim();
    const apellido = divApellido.value.trim();
    // Reset previo
        // Nombre
    divNombre.classList.remove("is-invalid", "is-valid");
    nombreInvalido.textContent = "";
    nombreValido.textContent = "";
        // Apellido
    divApellido.classList.remove("is-invalid", "is-valid");
    apellidoInvalido.textContent = "";
    apellidoValido.textContent = "";


    // Validaciones de nombre
    if (nombre === "") {
        divNombre.classList.add("is-invalid");
        nombreInvalido.textContent = "Este campo no puede estar vacío.";
        esValido = false;
    } else {
            divNombre.classList.add("is-valid");
            nombreValido.textContent = "Nombre válido ✅";
    }

    // Validaciones de apellido
    if (apellido === "") {
        divApellido.classList.add("is-invalid");
        apellidoInvalido.textContent = "Este campo no puede estar vacío.";
        esValido = false;
    } else {
            divApellido.classList.add("is-valid");
            apellidoValido.textContent = "Apellido válido ✅";
    }
    return esValido;
}

// Evento en tiempo real
divNombre.addEventListener("input", validar);
divApellido.addEventListener("input", validar);

// Evento al enviar formulario
document.getElementById("loginForm").addEventListener("submit", function (event) {
    if (!validar()) {
    event.preventDefault(); // Evita envío si está mal
    }
});