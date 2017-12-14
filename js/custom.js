$(document).ready(function(){
	// alert('iiiiiiii');
	// BXSLIDER
	$('.bxslider').bxSlider({
		captions: true,
		ariaLive: true,
		ariaHidden: true,
		pager: true,
		controls: true,
		preloadimages : 'visible',
		nextText: 'Siguiente',
		prevText: 'Anterior'
	});

	// SELECT2
	$('#form_fecha').on('submit',function(e){
		var select2 = $('#searchUser').val();

		if(select2 == 'Escribe aquí tu nombre' || select2 == '')
		{
			e.preventDefault();
			$('#btn_buscar').attr('disabled','disabled');
			alert('Debes escribir un nombre');
		}
	})
	$('#searchUser').change(function(){
		var select2 = $('#searchUser').val();
		if(select2 !== 'Escribe aquí tu nombre')
		{
			$('#btn_buscar').removeAttr('disabled');
		}
	});
	$('#searchUser').select2({
		placeholder : "Escribe aquí tu nombre",
		// allowClear  : true,
		text        :''
	});
	// QUITAR ENLACE DE BARRIO 
	$('#contenedor_fechas a').removeAttr('href');


});