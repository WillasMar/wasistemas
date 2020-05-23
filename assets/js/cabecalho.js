$(function(){
	var tag = 'home';

	$("header nav ul li").bind('click',function(){
		$("header nav ul li").removeClass('active');
		$(this).addClass('active');
		tag = $(this).attr('data-tag')
		$(".corpo").load(tag);
	});

	//efeito fadeIn e fadeOut em tgMenu
	var usuarioInt = document.getElementById('usuarioInt')
	usuarioInt.addEventListener('click', function(){
		var tgMenu = document.getElementById('tgMenu')
		var dataStatus = tgMenu.dataset.status

		switch(dataStatus){
			case "off":
				fadeIn(tgMenu,1)
				tgMenu.dataset.status = "on"
				break
			case "on":
				fadeOut(tgMenu,1)
				tgMenu.dataset.status = "off"
				break
		}

		function fadeIn(tgMenu,time){
			processa(tgMenu,time,0,100);
		}

		function fadeOut(tgMenu,time){
			processa(tgMenu,time,100,0);
		}

		function processa(tgMenu,time,initial,end){
			if(initial == 0){
				increment = 2;
				tgMenu.style.display = "block";
			}else {
				increment = -2;
			}

			opc = initial;

			intervalo = setInterval(function(){
				if((opc == end)){
				  if(end == 0){
					  tgMenu.style.display = "none";
					  tgMenu.classList.remove('tgMenu') 
				  }
				  clearInterval(intervalo);
				}else{
					opc += increment;
					tgMenu.style.opacity = opc/100;
					tgMenu.classList.add('tgMenu')
					tgMenu.style.filter = "alpha(opacity="+opc+")"; //compatível com ie6 ao ie8
				}
			  },time * 10);
		}
	})

	/*
	$('#usuarioInt').bind('click', function(){
		$dataStatus = $(this).find('.tgMenu').attr('data-status')

		switch($dataStatus){
			case "off":
				$(this).find('.tgMenu').attr('data-status','on')
				$(this).find('.tgMenu').fadeIn()
				break
			case "on":
				$(this).find('.tgMenu').attr('data-status','off')
				$(this).find('.tgMenu').fadeOut()
				break
		}
	})*/
});