<div class="modal-content">
    <div id="form_cuidador_div">
        <form id="form_animal_edit">

            <div class="row">                        
                <div class="input-field col s4 ">
                    <input type="text" name="nombre" required class="validate" value="<?php echo $this->data->animal[0]['ani_nombre'] ?>">
                    <label for="PrimerNombre" class="active">Nombre</label>
                </div>  
                <div class="input-field col s4 ">
                    <input type="text" name="especie" required class="validate" value="<?php echo $this->data->animal[0]['ani_especie'] ?>">
                    <label for="especie" class="active">Especie</label>
                </div>  
                <div class="input-field col s4 ">
                    <input type="text" name="raza" required class="validate" value="<?php echo $this->data->animal[0]['ani_raza'] ?>">
                    <label for="raza" class="active">Raza</label>
                </div>                          
            </div>
            <div class="row">
                <div class="input-field col s4 ">
                    <select name="sexo">
                        <option value="" disabled selected>Seleccione Sexo</option>                
                        
                        <?php
                        
                        foreach ($this->data->genero as $key=> $value) {
                            if($value == $this->data->animal[0]['ani_sexo'] ){
                            
                        ?>
                         <option selected value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php }else{ ?>
                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php } }?>
                                            
                    </select>
                    <label for="especie" >sexo</label>
                </div> 
                <div class="input-field col s4 ">
                    <input type="date" name="fecha nacimiento" required class="validate" value="<?php echo $this->data->animal[0]['ani_fnacimiento'] ?>">
                    <label for="fnacimiento">Fecha Nacimiento </label>
                </div>  
                <div class="input-field col s4 ">
                    <input type="date" name="fecha ingreso" required class="validate" value="<?php echo $this->data->animal[0]['ani_fingreso'] ?>">
                    <label for="fingreso" class="active">Fecha Ingreso </label>
                </div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s5 ">
                    <input type="text" name="color" required class="validate" value="<?php echo $this->data->animal[0]['ani_color'] ?>">
                    <label for="especie" class="active">Color</label>
                </div> 
                <div class="input-field col s5 ">
                    <select name="Cuidador">
                        <option value="" disabled selected>Seleccione...</option>
                        <?php
                        foreach ($this->data->cuidador as $value) {
                            if($value['cui_id'] == $this->data->animal[0]['tblcuidador_cui_id'] ){
                            
                        ?>
                         <option selected value="<?php echo $value['cui_id']; ?>"><?php echo $value['cui_nombre']; ?></option>
                        <?php }else{ ?>
                            <option value="<?php echo $value['cui_id']; ?>"><?php echo $value['cui_nombre']; ?></option>
                        <?php } }?>
                    </select>
                    <label for="cuidador" >Cuidador</label>
                </div> 
            </div> 

        </div>

    </form>
    <div class="row">
        <div class="col s2"></div>
        <div class="col s4">
            <button type="submit" class="btn waves-effect blue darken-3" onclick="UpdateData(<?php echo $this->data->animal[0]['ani_id'] ?>); return false;"><i
                    class="material-icons left">save</i>Guardar</button>

        </div>
        <div class="col s2"></div>
        <div class="col s4">
            <button class="modal-close btn waves-effect red darken-4"><i
                    class="material-icons left">cancel</i>Cerrar</button>

        </div>



    </div>
</div>
