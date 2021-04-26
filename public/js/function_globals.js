
// PROCESO INFORMACION PARA EL AJAX
function ProcessData(data){
	var ArrayNew = []
	
	for (var value of data.values()) {
		ArrayNew.push(value)
		}
		return ArrayNew;
}

// FUNCION GLOBAL AJAX
function ReadyChangeJquery(GetData,IdentificatorDiv){

	$.ajax ( {
		method: "POST",
		url: "app.php",
		data: GetData,
	} )
	.done(function(data) {
		$(IdentificatorDiv).html(data);
		 $('select').formSelect();
		 ;
        
	} )
	.fail(function(){
		$(IdentificatorDiv).html("LA CONSULTA NO ARROJO INFORMACION");
	} );

}

// FUNCION VALIDAR INPUTS
function Validate_Form(x_function_ready,formulario){
	let count_errors = 0

	$(`${formulario} input`).each(function(index, item){
		var $input = $(item);
		console.log(item.value.length);
		if (item.value.length === 0) {
			/* console.log(item); */
		  /* $input.closest('div').addClass('has-error'); */
		  if (item.type !== 'hidden' && item.required) {
			toastr.error('Error',`Campo vacio ${item.name} `)
			count_errors=count_errors+1;
		  }
		}
	});
	$(`${formulario} select`).each(function(index, item){
		if (item.value.length === 0 ) {
			toastr.error('Error',`Campo vacio ${item.name} `)
			count_errors=count_errors+1;
		}
	});
	if (count_errors == 0) {
		x_function_ready()
	}
	
}

// FUNCION MENSAJES DE CONFIRMACION
function Message_Confirm(x_function_ready){

	$.confirm({
		title: 'Quieres Continuar!',
		content: 'La siguiente accion afectara los registros!',
		type: 'red',
		boxWidth: '30%',
		useBootstrap: false,
		theme: 'material',
		buttons: {
			confirm: function () {
				$.alert({
					title: 'Confirmado',
					content: 'La accion ha realizar se ha confirmado',
					type: 'red',
					boxWidth: '30%',
					useBootstrap: false,
					theme: 'material',
				});
				x_function_ready()
				$('.modal').modal('close');

			},
			cancel: function () {
				$.alert({
					title: 'Cancelado',
					content: 'La accion ha realizar se ha cancelado',
					type: 'red',
					boxWidth: '30%',
					useBootstrap: false,
					theme: 'material',
				});
			},
		}
	});	

}

