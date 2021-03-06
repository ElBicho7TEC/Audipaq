{{-----------------------Modal de Crear una Empresa---------------------------}}
<div id="crearEmpresa" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#546E7A;">
                <h4 class="modal-title" style="color: white" >Registrar empresa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
		
            <form class="formulario" action="btnLogin" method="post" enctype="multipart/form-data" style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" id="idnombreEmpresa" name="nombreEmpresa" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Giro</label>
                            <input type="text" id="idgiroEmpresa" name="giroEmpresa" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Misión</label>
                            <textarea id="idmisionEmpresa" name="misionEmpresa" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Visión</label>
                            <textarea id="idvisionEmpresa" name="visionEmpresa" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Valores</label>
                            <input type="text" id="idvaloresEmpresa" name="valoresEmpresa" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" id="iddireccionEmpresa" name="direccionEmpresa" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" id="idtelefonoEmpresa" name="telefonoEmpresa" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" id="idcorreoEmpresa" name="correoEmpresa" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Logotipo</label>
                            <input type="file" id="idlogotipoEmpresa" name="logotipoEmpresa" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <div class="modal-footer" style="background:#546E7A;">
                <button type="submit" class="btn btn-primary" style="background: #00ACC1; border: none;">Guardar</button>
            </div>
        </div>
    </div>
</div>