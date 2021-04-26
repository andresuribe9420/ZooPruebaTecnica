
<div id="modalAnimal" class="modal">
    <div class="modal-content">
        <h4 class="center">Nuevo Animal</h4>
        <div id="form_cuidador_div">
            <form id="form_animal">  
                    <div class="row">                        
                        <div class="input-field col s4 ">
                            <input type="text" name="nombre" required class="validate" id="nombreanimal">
                            <label for="PrimerNombre">Nombre</label>
                        </div>  
                        <div class="input-field col s4 ">
                            <input type="text" name="especie" required class="validate" id="especieanimal">
                            <label for="especie">Especie</label>
                        </div>  
                        <div class="input-field col s4 ">
                            <input type="text" name="raza" required class="validate" id="razaanimal">
                            <label for="raza">Raza</label>
                        </div>                          
                    </div>
                    <div class="row">
                        <div class="input-field col s4 ">
                            <select name="sexo" id="sexoanimal">
                                <option value="" disabled selected>Seleccione Sexo</option>
                                <option value="Hembra">Hembra</option>
                                <option value="Macho">Macho</option>
                            </select>
                            <label for="especie">sexo</label>
                        </div> 
                        <div class="input-field col s4 ">
                            <input type="date" name="fecha nacimiento" required class="validate" id="fnaanimal">
                            <label for="fnacimiento">Fecha Nacimiento </label>
                        </div>  
                        <div class="input-field col s4 ">
                            <input type="date" name="fecha ingreso" required class="validate" id="finanimal">
                            <label for="fingreso">Fecha Ingreso </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s1"></div>
                        <div class="input-field col s5 ">
                            <input type="text" name="color" required class="validate" id="coloranimal">
                            <label for="especie">Color</label>
                        </div> 
                        <div class="input-field col s5 ">
                            <select name="Cuidador" id="cuidadoranimal">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php
                                foreach ($this->data->cuidador as $value) {
                                ?>
                                    <option value="<?php echo $value['cui_id']; ?>"><?php echo $value['cui_nombre']; ?></option>
                                <?php } ?>
                            </select>
                            <label for="cuidador">Cuidador</label>
                        </div> 
                    </div>                  
                   
                </div>
                
            </form>
            <div class="row">
                <div class="col s2"></div>
                <div class="col s4">
                    <button type="submit" class="btn waves-effect blue darken-3" onclick="SaveData(); return false;"><i class="material-icons left">save</i>Guardar</button>                   
                        
                </div>   
                <div class="col s2"></div>            
                <div class="col s4">
                    <button class="modal-close btn waves-effect red darken-4"><i class="material-icons left">cancel</i>Cerrar</button>                   
                        
                </div>               
                    
                   
                
            </div>
        </div>
    </div>
</div>