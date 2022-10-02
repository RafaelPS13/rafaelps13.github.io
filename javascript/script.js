$(function(){

    $('#exampleCheck1').click(function(){

        var checkbox = $('#exampleCheck1');

        if(checkbox.is(":checked")) {
            $('#senha').attr('type', 'text');
        } else {
            $('#senha').attr('type', 'password');
        }

    });

    function listagem(lista) {
        console.log(lista);
        $("#titulo_inserir").text(lista);
    }

});

$('#Cardapio').click(function(){
    $('#modal_a_ser_aberto').modal('show');
});


