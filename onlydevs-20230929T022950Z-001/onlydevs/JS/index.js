// Función para mostrar el modal de registro
function mostrarRegistroModal() {
    const registroModal = document.getElementById('registroModal');
    registroModal.classList.remove('hidden');
}

// Función para ocultar el modal de registro
function ocultarRegistroModal() {
    const registroModal = document.getElementById('registroModal');
    registroModal.classList.add('hidden');
}

// Escuchar el clic en el botón de registro
const registroBtn = document.getElementById('registroBtn');
registroBtn.addEventListener('click', mostrarRegistroModal);

// Escuchar el clic en el botón de cierre del modal
const cerrarModalBtn = document.getElementById('cerrarModal');
cerrarModalBtn.addEventListener('click', ocultarRegistroModal);