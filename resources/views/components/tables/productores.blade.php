<div class="row">
    <div class="col-md-12">
            <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Productores Registrados</h4>
                    <div class="row">
                        <div class="col-12  d-flex justify-content-end">
                            <button class="btn btn-primary" rel="tooltip"  data-toggle="modal" data-target="#exampleModal">Insertar Nuevo Productor<div class="ripple-container"></div></button>
                            <!-- <x-modals.nuevop/> -->
                        </div>
                    </div>
            </div>
            <div class="card-body">
                     
                        <table class="table" id="product">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Dni</th>
                                    <th>Nombre Agencia</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                   
            </div>
    </div>
</div>
<x-modals.productor/>