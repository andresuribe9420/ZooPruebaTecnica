
<div id="modalCuidador" class="modal">
    <div class="modal-content">
        <h4 class="center">Nuevo Cuidador</h4>
        <div id="form_cuidador_div">
            <form id="form_cuidador">  

                    <div class="row">
                        <div class="col s1"></div>
                        <div class="input-field col s5 ">
                            <input type="number" name="Documento" required class="validate">
                            <label for="Documento">Documento de Identidad</label>
                        </div>
                        <div class="input-field col s5 ">
                            <input type="text" name="nombre" required class="validate">
                            <label for="PrimerNombre">Nombre</label>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col s1"></div>
                        <div class="input-field col s5 ">
                            <input type="text" name="apellido" required class="validate">
                            <label for="PrimerApellido">Apellido </label>
                        </div>  
                        <div class="input-field col s5 ">
                            <input type="number" name="telefono" required class="validate">
                            <label for="telefono"> Telefono </label>
                        </div>                  
                        
                    </div>
                    <div class="row">
                        <div class="col s3"></div>
                        <div class="input-field col s6 ">
                            <input type="email" name="email" required class="validate">
                            <label for="Email"> Correo Electronico </label>
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