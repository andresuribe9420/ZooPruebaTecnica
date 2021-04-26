function SaveData() {

    
        Message_Confirm(()=>{
            var data = new FormData($("#form_animal")[0]);	
            var DatosAnimal ={
                "Ctr":"Animal",
                "Acc":"registrarAnimal",
                "formularioCuidador":ProcessData(data)
            }
            ReadyChangeJquery(DatosAnimal,"#table_data_animales");
        })
    
    
}

function OneData(id){

    var OneIdAnimal ={
        "Ctr":"Animal",
        "Acc":"oneAnimal",
        "id":id
    }

    ReadyChangeJquery(OneIdAnimal,"#form_edit")		
}	

function UpdateData(id){

    Validate_Form(()=>{
        Message_Confirm(()=>{
        var data = new FormData($("#form_animal_edit")[0]);
        var DatosAnimalEdit ={
            "Ctr":"Animal",
            "Acc":"editDataAnimal",
            "id":id,
            "formularioAnimalEdit":ProcessData(data)
        }
        ReadyChangeJquery(DatosAnimalEdit,"#table_data_animales")
    })
},"#form_animal_edit")
}

function DeleteData(id){

    Message_Confirm(()=>{
        var DeleteAnimal ={
            "Ctr":"Animal",
            "Acc":"deleteAnimal",
            "id":id,
        }
        ReadyChangeJquery(DeleteAnimal,"#table_data_animales")
    })
}


