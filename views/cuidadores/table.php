<div id="table_data_cuidador">
    <div class="container">
        <div class="row" >
            <div class="col s12" >
                <div class="card  z-depth-4">
                    <div class="card-title center">
                        <h4> Cuidadores</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s1"></div>
                            <div class="col s10">
                                <table class="responsive-table centered striped" >
                                    <thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre </th>
                                            <th>Apellido</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($this->data as $value) {
                                                                       
                                        ?>
                                            <tr>
                                                <td><?php echo $value['cui_cedula'] ?></td>
                                                <td><?php echo $value['cui_nombre'] ?></td>
                                                <td><?php echo $value['cui_apellido'] ?></td>
                                                <td><?php echo $value['cui_telefono'] ?></td>
                                                <td><?php echo $value['cui_correo'] ?></td>
                                                <td>
                                                    <button data-target="modalCuidadorEdit" class="btn modal-trigger waves-effect amber darken-4" onclick="OneData(<?php echo $value['cui_id'] ?>)"><i class="material-icons">edit</i></button> 
                                                    <button onclick="DeleteData(<?php echo $value['cui_id'] ?>)" class="btn modal-trigger waves-effect red darken-4"><i class="material-icons">delete</i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button data-target="modalCuidador" class="btn modal-trigger waves-effect blue darken-3"><i class="material-icons left">library_add</i>Agregar Cuidador</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
