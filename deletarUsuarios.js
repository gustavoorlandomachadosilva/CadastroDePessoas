function deletarUsuarios() {
    var idAdd = $('#inputIDModal').val();
    $.ajax({
        url: "delete.php",
        type: 'post',
        data: {
            dataSend: idAdd
        },
        success: function (data) {
            alert(data); // Exibe a mensagem de sucesso ou erro retornada pelo PHP
            $('#confirmarExclusaoModal').modal('hide');
        },
        error: function (xhr, status, error) {
            console.error(status, error); // Exibe o erro no console do navegador
        }
    });
}
