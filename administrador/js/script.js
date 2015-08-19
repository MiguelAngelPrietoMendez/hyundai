var sectionOptions = new Array('Color de fondo','Textos / Colores','Colores / Iconos / Legales','','','','','');

	$(document).ready(function(){
		$('.module').fadeOut();
		$('.module').eq(0).fadeIn();
		$('.colorHolder').ColorPicker({flat: true});
		$('.colorpicker_current_color').remove();
		$('.colorpicker_color').mousedown(function(){
			$(this).mousemove(function(){
				$('.color').css({backgroundColor : '#'+$('.colorpicker_hex input').val()});
			});
		});
		$('.section').click(function(){
			$('.section').removeClass('activeSection');
			$(this).addClass('activeSection')
			$('.ssTitle').text($(this).text());
			$('.ssTitle').append("<i class='hIcon fa fa-angle-down'>");
			var n = $(this).attr('data-relation');
			$('.sectionOptions').text(sectionOptions[n]);
			$('.module').fadeOut('fast');
			$('footer').css({
				marginTop : $(window).height()  - $('footer').height() - $('.container_12').height() + 'px'
			});
			var id = $(this).attr('id').split('-');
			var n = id[1];
			setTimeout(function(){
				$('#module-'+n).fadeIn();
			},500);

		});

		$('footer').css({
			marginTop : $(window).height()  - $('footer').height() - $('.container_12').height() + 'px'
		});
	});