<div id="table_data_cria">
    <div class="container">
        <div class="row" >
            <div class="col s12" >
                <div class="card  z-depth-4">
                    <div class="card-title center">
                        <h4> Crias</h4>
                    </div>
                    <div class="card-content">
                        <table class="responsive-table centered striped" >
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Especie </th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Madre</th>
                                    <th>Cuidador</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($this->data as $value) {
                                                                
                                ?>
                                    <tr>
                                        <td><?php echo $value['cri_nombre'] ?></td>
                                        <td><?php echo $value['cri_especie'] ?></td>
                                        <td><?php echo $value['cri_raza'] ?></td>
                                        <td><?php echo $value['cri_sexo'] ?></td>
                                        <td><?php echo $value['cri_fnacimiento'] ?></td>
                                        <td><?php echo $value['cri'] ?></td>
                                        <td><?php echo $value['cui_nombre'] ?></td>
                                        <td>
                                            <button data-target="modalAnimalEdit" class="btn modal-trigger waves-effect amber darken-4" onclick="OneData(<?php echo $value['ani_id'] ?>)"><i class="material-icons">edit</i></button> 
                                            <button onclick="DeleteData(<?php echo $value['ani_id'] ?>)" class="btn modal-trigger waves-effect red darken-4"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action center">
                        <button data-target="modalCria" class="btn modal-trigger waves-effect blue darken-3"><i class="material-icons left">library_add</i>Agregar Cria</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
