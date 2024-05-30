$(document).ready(function() {
    $('#cep').mask('00000-000');
});

$(document).ready(function() {
    $('#preco').mask('#.##0,00', { reverse: true });
});
