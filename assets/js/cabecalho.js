$(function(){
	var tag = 'home';

	$("header nav ul li").bind('click',function(){
		$("header nav ul li").removeClass('active');
		$(this).addClass('active');
		tag = $(this).attr('data-tag') + '.php';
		$(".corpo").load(tag);
	});
});