$(document).ready(function() {
	$('#estados').on("change", function() {
		$('#cidades').show();

		var id_estado = $('#estados').val();
		$.post('auxiliar.php', 
			{parametro: id_estado},
			function (dado, status){
				$('#cidades').html(dado);
			});
	});
});