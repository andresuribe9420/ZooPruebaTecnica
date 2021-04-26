<div class="modal-content">
    <div id="form_cuidador_div">
        <form id="form_cuidador_edit">

            <div class="row">
    
                <div class="col s1"></div>
                <div class="input-field col s5 ">
                    <input type="number" name="Documento" required class="validate" value="<?php echo $this->data->cuidador[0]['cui_cedula'] ?>">
                    <label for="Documento" class="active">Documento de Identidad</label>
                </div>
                <div class="input-field col s5 ">
                    <input type="text" name="nombre" required class="validate" value="<?php echo $this->data->cuidador[0]['cui_nombre'] ?>">
                    <label for="PrimerNombre" class="active">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s5 ">
                    <input type="text" name="apellido" required class="validate" value="<?php echo $this->data->cuidador[0]['cui_apellido'] ?>">
                    <label for="PrimerApellido" class="active">Apellido </label>
                </div>
                <div class="input-field col s5 ">
                    <input type="number" name="telefono" required class="validate" value="<?php echo $this->data->cuidador[0]['cui_telefono'] ?>">
                    <label for="telefono" class="active"> Telefono </label>
                </div>

            </div>
            <div class="row">
                <div class="col s3"></div>
                <div class="input-field col s6 ">
                    <input type="email" name="email" required class="validate" value="<?php echo $this->data->cuidador[0]['cui_correo'] ?>">
                    <label for="Email" class="active"> Correo Electronico </label>
                </div>
            </div>

        </div>

    </form>
    <div class="row">
        <div class="col s2"></div>
        <div class="col s4">
            <button type="submit" class="btn waves-effect blue darken-3" onclick="UpdateData(<?php echo $this->data->cuidador[0]['cui_id'] ?>); return false;"><i
                    class="material-icons left">save</i>Guardar</button>

        </div>
        <div class="col s2"></div>
        <div class="col s4">
            <button class="modal-close btn waves-effect red darken-4"><i
                    class="material-icons left">cancel</i>Cerrar</button>

        </div>



    </div>
</div>
