$(function(){
    $('#cgc').mask('000.000.000-00', {reverse: true}) //cfp
    $('#cgc').attr('placeholder','___.___.___-__')

    $('#telefone').mask('(00) 0000-0000', {reverse: false}) //telefone
    $('#telefone').attr('placeholder','(__) ____-____')

    $('#celular').mask('(00) 00000-0000', {reverse: false}) //celular
    $('#celular').attr('placeholder','(__) _____-____')

    $('input[type="radio"]').bind('click', function(){
        radio = $(this).attr('value')

        switch (radio) {
            case "radioCpf":
                $('#cgc').mask('000.000.000-00')
                $('#cgc').attr('placeholder','___.___.___-__')
                break
            case "radioCnpj":
                $('#cgc').mask('00.000.000/0000-00')
                $('#cgc').attr('placeholder','__.___.___/____-__')
                break        
            default:
                break;
        }      
    })    
})