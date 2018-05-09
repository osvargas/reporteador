$(document).ready(function(){
	$('#servicio').on('change',function(){
		var selectValor = '#' +$(this).val();
		$('#principal').children('div').hide();
		$('#principal').children(selectValor).show();


	});
});