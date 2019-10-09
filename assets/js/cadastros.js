$(function(){
    $('.cadastros .conteudo ul li').bind('click',function(){
    	$('.cadastros .conteudo ul li').removeClass('ativo');
    	$(this).addClass('ativo');
    	$desAtivo = $(this).find('.descricao').html();
    	$('.cadastros .cabecalho div').html($desAtivo);
    });

    $('.cadastros .conteudo ul a').bind('click',function(){
    	return false;
    });
});