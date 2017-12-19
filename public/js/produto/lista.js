jQuery(function($){

	var lista = function(){
	    	$.ajax({
				type : 'GET',
				url : '/api/v1/produto',
				dataType : "json",
				success : function(res) {
					if($.isArray(res)){
						$.each(res,function(i,v){
							var valor = v.valor.replace(".",",");
							$("#rsLista").append(''+
									'<tr>'+
										'<th scope="row">'+v.id+'</th>'+
									      '<td>'+v.descricao+'</td>'+
									      '<td>'+valor+'</td>'+
									      '<td>'+v.status+'</td>'+
									      '<td>'+
									      	'<button class="btn btn-info" type="button">'+
												'<i class="fa fa-search" aria-hidden="true"></i>'+
									      	'</button>'+
									      	'<button class="btn btn-warning" type="button">'+
									      		'<i class="fa fa-pencil-square-o"></i>'+
									      	'</button>'+
											'<button class="btn btn-danger" type="button">'+
												'<i class="fa fa-trash"></i>'+
											'</button>'+
									  '</tr>');
						});
					}else{
						console.log("Ocorreu um erro na montagem da lista!");
						$("#rsLista").append(''+
								'<tr>'+
									'<th scope="row" colspan="5">'+v.id+'</th>'+
								      '<td>Nenhum produto cadastrado!</td>'+
								'</tr>');
					}
				},
				beforeSend : function() {
//					$("#msg").html("Enviando dados...");
				}
			}).fail(function(jqXHR, textStatus, msg) {
				alert("Erro de comunicação servidor/cliente: "+msg);
			});	
	}
	lista();
});