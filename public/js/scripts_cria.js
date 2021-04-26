function SaveData() {
    
    Message_Confirm(()=>{
        var data = new FormData($("#form_cria")[0]);	
        var DatosCria ={
            "Ctr":"Cria",
            "Acc":"registrarCria",
            "formularioCria":ProcessData(data)
        }
        ReadyChangeJquery(DatosCria,"#table_data_cria");
    })


}

function OneData(id){

var OneIdCria ={
    "Ctr":"Cria",
    "Acc":"oneCria",
    "id":id
}

ReadyChangeJquery(OneIdCria,"#form_edit")		
}	

function UpdateData(id){

Validate_Form(()=>{
    Message_Confirm(()=>{
    var data = new FormData($("#form_cria_edit")[0]);
    var DatosAnimalEdit ={
        "Ctr":"Cria",
        "Acc":"editDataCria",
        "id":id,
        "formularioCriaEdit":ProcessData(data)
    }
    ReadyChangeJquery(DatosAnimalEdit,"#table_data_cria")
})
},"#form_animal_edit")
}

function DeleteData(id){

Message_Confirm(()=>{
    var DeleteCria ={
        "Ctr":"Cria",
        "Acc":"deleteCria",
        "id":id,
    }
    ReadyChangeJquery(DeleteCria,"#table_data_cria")
})
}


