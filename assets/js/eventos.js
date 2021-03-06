(function($){

	$.fn.galeria = function(){

		//hover cerrar carrito
		$(".cerrar-item").hover(function(){
	        $(this).addClass('cerrar-hover', 500);
	        }, function(){
	        $(this).removeClass('cerrar-hover', 500);
	    });

		//hover categorias
		$(".lnk-cat-prod").hover(function(){
	        $(this).addClass('activo', 200);
	        }, function(){
	        $(this).removeClass('activo', 200);
	    });
	}

})(jQuery);

$(document).ready(function(){

	//mostrar categoria
	$(document).on("click", "#mostrar-categorias", function(){
		$(this).css('display','none');
		$('#ocultar-categorias').css('display','block');
		$('#categorias').fadeIn();
    });


    //ocultar categoria
	$(document).on("click", "#ocultar-categorias", function(){
		$(this).css('display','none');
		$('#mostrar-categorias').css('display','block');
		$('#categorias').css('display','none');
    });
	
	/*$("contenedor").galeria();
   	$.fn.galeria();*/

    //botón ok listado productos (agrega al carrito)
    /*$( ".cantidad" ).change(function() {
		idOk = $(this).attr('id');
		if($(this).val()){
			$("."+idOk).removeClass('ok-inactivo', 500);
			$("."+idOk).addClass('ok-activo', 500);
		}else{
			$("."+idOk).addClass('ok-inactivo', 500);
			$("."+idOk).removeClass('ok-activo', 500);
		}
	});*/

	//galeriaCategorias
	currentGalCategorias = 1 ;

	GaleriaCategorias(currentGalCategorias);
	$(document).on("click", ".lnk-mas-GalCategorias", function(){
		currentGalCategorias = currentGalCategorias + 1;
        GaleriaCategorias(currentGalCategorias);
    });
    $(document).on("click", ".lnk-menos-GalCategorias", function(){
		currentGalCategorias = currentGalCategorias - 1;
        GaleriaCategorias(currentGalCategorias);
    });

    //mover sidebar
	$(document).on("click", "#mover-sidebar", function(){
		posicion = $(this).attr('posicion');
		if(posicion == 'left'){
			$('.sidebar').addClass('sidebar-left');
			$('.contenido').addClass('contenido-left');
			$('.sidebar').removeClass('sidebar-right');
			$('.contenido').removeClass('contenido-right');
			$(this).attr('posicion','right');
		}else{
			$('.sidebar').addClass('sidebar-right');
			$('.contenido').addClass('contenido-right');
			$('.sidebar').removeClass('sidebar-left');
			$('.contenido').removeClass('contenido-left');
			$(this).attr('posicion','left');
		}
    });
    
});


 function GaleriaCategorias(current){

	//cantidad de items
	totalItems = $('.bloque-categoria > li').length;

	if(current == 1){
		$('.lnk-menos-GalCategorias').css('display','none');
		$('.lnk-mas-GalCategorias').css('display','block');
	}else if(current == totalItems){
		$('.lnk-mas-GalCategorias').css('display','none');
		$('.lnk-menos-GalCategorias').css('display','block');
	}else{
		$('.lnk-mas-GalCategorias').css('display','block');
		$('.lnk-menos-GalCategorias').css('display','block');
	}

	//muestra los elementos
	for(i=1 ; i <= totalItems ; i++){

		if(i == current) {
			$('.currentCategoria-'+ i).fadeIn('fast');
			//$('.currentCategoria-'+ i).slideDown();
			//$('.currentCategoria-'+ i).slideToggle();
			//'.currentCategoria-'+ i).css('display','block');
		}else{
			//'.currentCategoria-'+ i).fadeOut();
			//$('.currentCategoria-'+ i).slideUp();
			//$('.currentCategoria-'+ i).slideToggle();
			$('.currentCategoria-'+ i).css('display','none');
		}

	}

}