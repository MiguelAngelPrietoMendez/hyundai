
	$(document).ready(function(){
		$('footer').css({// Posicionando footer
			marginTop : $(window).height()  - $('footer').height() - $('.container_12').height() + 20 +'px'
		});
		$('.lightbox').height($(window).height());//Inicializando height del ligthbox
		$('.module').fadeOut();//Ocultando todos los modulos
		$('.module').eq(0).fadeIn();//Mostrando el primer modulo (BODY)
		$('.colorHolder').ColorPicker({flat: true});//Inicializando el colorPicker
		$('.colorpicker_current_color').remove();
		$('.colorpicker_color').mousedown(function(){
			$(this).mousemove(function(){
				$('.color').css({backgroundColor : '#'+$('.colorpicker_hex input').val()});
			});
		});
		$('.section').click(function(){//Acciones para mostrar módulos
			$('.section').removeClass('activeSection');
			$(this).addClass('activeSection')
			$('.ssTitle').text($(this).text());
			$('.ssTitle').append("<i class='hIcon fa fa-angle-down'>");
			var n = $(this).attr('data-relation');
			$('.subSection').removeClass('activeOption');
			$('.subSection.opt-'+n).eq(0).addClass('activeOption');
			$('.subSection').fadeOut(10);
			$('.opt-'+n).fadeIn();
			$('.module').fadeOut('fast');
			var id = $(this).attr('id').split('-');
			var n = id[1];
			setTimeout(function(){
				$('#module-'+n).fadeIn();
				$('.subModule').fadeOut();
				$('#subModule-1').fadeIn();
				$('footer').css({
					marginTop : $(window).height()  - $('footer').height() - $('.container_12').height() + 20 +'px'
				});
			},500);

		});
		$('.subSection').click(function(){//Acciones para mostrar los subMóulos dentro de cada sección
			$('.subSection').removeClass('activeOption');
			$(this).addClass('activeOption');
			$('.subModule').fadeOut(10);
			var id = $(this).attr('id').split('-');
			var n = id[1];
			setTimeout(function(){
				$('#subModule-'+n).fadeIn();
				$('footer').css({
					marginTop : $(window).height()  - $('footer').height() - $('.container_12').height() + 20 +'px'
				});
			},500);

		});
		$('#tags').tagsInput({//Declarando el plugin para tags
			'defaultText' : ''
		});
		$('body').keydown(function(){//Dando estilo a los tags
			$('#tags_tag').css({color: '#FFF', fontFamily: 'modern'});
		});
		$('.openLightbox').click(function(){//Lightbox para mostrar imágenes
			var id = $(this).attr('id');
			$('.lightbox').fadeIn();
			$('#lightImg').attr('src','img/'+id+'.jpg');
			$('body').keydown(function(e){
				if(e.keyCode == 27)
					$('.lightbox').fadeOut();
			});
			$('.lightbox').click(function(){
				$(this).fadeOut();
			});
		});
	});