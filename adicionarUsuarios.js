function adicionarUsuarios() {
    var idAdd = $('#inputId').val();
    var nameAdd = $('#inputName').val();
    var emailAdd = $('#inputEmail').val();

    $.ajax({
        url: "insert.php",
        type: 'post',
        data: {
            idSend: idAdd,
            nameSend: nameAdd,
            emailSend: emailAdd
        },
        success: function(data) {
            alert(data); // Exibe a mensagem de sucesso ou erro retornada pelo PHP
        },
        error: function(xhr, status, error) {
            console.error(status, error); // Exibe o erro no console do navegador
        }
    });
}


