document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('btnAlterar').addEventListener('click', mostrarOcultarInputs);
    document.getElementById('btnInserir').addEventListener('click', mostrarOcultarInputs);
    document.getElementById('btnExcluir').addEventListener('click', abrirModalExcluir);
});

function mostrarOcultarInputs() {
    var inputsContainer = document.getElementById('inputsContainer');
    if (inputsContainer.style.display === 'none') {
        inputsContainer.style.display = 'block';
    } else {
        inputsContainer.style.display = 'none';
    }
}

function abrirModalExcluir() {
    // Seleciona a modal de confirmação de exclusão
    var modalExcluir = document.getElementById('confirmarExclusaoModal');    
    // Abre a modal
    var bootstrapModal = new bootstrap.Modal(modalExcluir);
    bootstrapModal.show();
}
