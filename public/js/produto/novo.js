jQuery(function($){
    $('form').submit(function() {
    	$.ajax({
			type : 'POST',
			url : '/api/v1/produto',
			data : $(this).serialize(),
			dataType : "json",
			success : function(res) {
				if(res.id > 0){
//					console.log(res);
					$("#msg").empty();					
				}else{
					$("#msg").empty();
					$("#msg").html(res);
				}
			},
			beforeSend : function() {
				$("#msg").html("Enviando dados...");
			}
		}).fail(function(jqXHR, textStatus, msg) {
			alert("Erro de comunicação servidor/cliente: "+msg);
		});
    	return false;
    });
});