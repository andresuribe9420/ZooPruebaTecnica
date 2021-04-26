


	function SaveData() {
		
			Message_Confirm(()=>{
				var data = new FormData($("#form_cuidador")[0]);	
				var DatosCuidador ={
					"Ctr":"Cuidador",
					"Acc":"registrarCuidador",
					"formularioCuidador":ProcessData(data)
				}
				ReadyChangeJquery(DatosCuidador,"#table_data_cuidador");
			})
		
		
	}

	function OneData(id){

		var OneIdCuidador ={
			"Ctr":"Cuidador",
			"Acc":"oneCuidador",
			"id":id
		}

		ReadyChangeJquery(OneIdCuidador,"#form_edit")		
	}	

	function UpdateData(id){

		Validate_Form(()=>{
			Message_Confirm(()=>{
			var data = new FormData($("#form_cuidador_edit")[0]);
			var DatosCuidadorEdit ={
				"Ctr":"Cuidador",
				"Acc":"editDataCuidador",
				"id":id,
				"formularioCuidadorEdit":ProcessData(data)
			}
			ReadyChangeJquery(DatosCuidadorEdit,"#table_data_cuidador")
		})
	},"#form_cuidador_edit")
	}

	function DeleteData(id){

		Message_Confirm(()=>{
			var UsuarioDelete ={
				"Ctr":"Cuidador",
				"Acc":"deleteCuidador",
				"id":id,
			}
			ReadyChangeJquery(UsuarioDelete,"#table_data_cuidador")
		})
	}
	
	
	
	


	