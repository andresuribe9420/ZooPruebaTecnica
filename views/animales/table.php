<div id="table_data_animales">
    <div class="container">
        <div class="row" >
            <div class="col s12" >
                <div class="card  z-depth-4">
                    <div class="card-title center">
                        <h4> Animales</h4>
                    </div>
                    <div class="card-content">
                   <?php foreach ($this->data as $value) {
                      print_r ($value);
                   } ?>
                    </div>
                    <div class="card-action center">
                        <button data-target="modalAnimal" class="btn modal-trigger waves-effect blue darken-3"><i class="material-icons left">library_add</i>Agregar animal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
