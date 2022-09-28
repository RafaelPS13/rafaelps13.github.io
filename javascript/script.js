$(function(){

    $('#exampleCheck1').click(function(){

        var checkbox = $('#exampleCheck1');

        if(checkbox.is(":checked")) {
            $('#senha').attr('type', 'text');
        } else {
            $('#senha').attr('type', 'password');
        }

    });
});
