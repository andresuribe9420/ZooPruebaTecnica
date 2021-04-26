<div id="table_data_animales">
    <div class="container">
        <div class="row" >
            <div class="col s12" >
                <div class="card  z-depth-4">
                    <div class="card-title center">
                        <h4> Animales</h4>
                    </div>
                    <div class="card-content">
                        <table class="responsive-table centered striped" >
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Especie </th>
                                    <th>Raza</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Cuidador</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($this->data as $value) {
                                                                
                                ?>
                                    <tr>
                                        <td><?php echo $value['ani_nombre'] ?></td>
                                        <td><?php echo $value['ani_especie'] ?></td>
                                        <td><?php echo $value['ani_raza'] ?></td>
                                        <td><?php echo $value['ani_fingreso'] ?></td>
                                        <td><?php echo $value['cui_nombre'] ?></td>
                                        <td>
                                            <button data-target="modalCuidadorEdit" class="btn modal-trigger waves-effect amber darken-4" onclick="OneData(<?php echo $value['ani_id'] ?>)"><i class="material-icons">edit</i></button> 
                                            <button onclick="DeleteData(<?php echo $value['ani_id'] ?>)" class="btn modal-trigger waves-effect red darken-4"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action center">
                        <button data-target="modalAnimal" class="btn modal-trigger waves-effect blue darken-3"><i class="material-icons left">library_add</i>Agregar animal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
