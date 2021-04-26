function ProcessData(data){
	var ArrayNew = []
	
	for (var value of data.values()) {
		ArrayNew.push(value)
		}

		//console.log(ArrayNew);
		return ArrayNew;
}

function ReadyChangeJquery(GetData,IdentificatorDiv){

	$.ajax ( {
		method: "POST",
		url: "app.php",
		data: GetData,
	} )
	.done(function(data) {
		$(IdentificatorDiv).html(data);
		 $('select').formSelect();
		 $('.collapsible').collapsible();
		 $('#myTable').DataTable({
			destroy: true,
			dom: 'Bfrtip',
			fixedColumns: true,
			buttons: [            
				{
					extend: 'excel',
					exportOptions: {
					columns: ":not(.notexportar)"
    				},					
					text: 'Excel <i class="material-icons left">save</i>',
					className:'btn teal darken-4'                
				},
				{
					extend: 'pdf',
					exportOptions: {
					columns: ":not(.notexportar)"
    				},					
					text: 'PDF <i class="material-icons left">save</i>',
					className:'btn red darken-4'                
				},
				{
					extend: 'print',
					text: 'Imprimir <i class="material-icons left">local_printshop</i>',
					exportOptions: {
					columns: ":not(.notexportar)"
    				},
					className:'btn blue darken-4',
					title:'SIGMA'                
				}
			],language: {
				search: "Buscar:",
				"searchPlaceholder": "Término de búsqueda",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},
				"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoPostFix": "",
				"aria": {
					"sortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sortDescending": ": Activar para ordenar la columna de manera descendente"
				},
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
			}  
		});
        
	} )
	.fail(function(){
		$(IdentificatorDiv).html("LA CONSULTA NO ARROJO INFORMACION");
	} );

}


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
