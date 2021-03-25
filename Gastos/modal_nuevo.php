<?php //MODAL para registro     ?>  
            <div class="modal fade" id="nuevogasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-white bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">Nueva Gasto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="nuevacaja.php" method="POST" >
                    <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Fechas</label>
                        <input type="date" class="form-control" id="fechaGasto">
                      </div>
                    <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Monto Cuotas</label>
                        <input type="text" class="form-control" id="monto_cuotas_internet">
                      </div>
                      <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Monto Instalaciones</label>
                        <input type="text" class="form-control" id="monto_cuotas_internet">
                      </div>
                      <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Monto Mercadopago</label>
                        <input type="text" class="form-control" id="monto_cuotas_internet">
                      </div>
                      <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Monto Banco</label>
                        <input type="text" class="form-control" id="monto_cuotas_internet">
                      </div>
                      <div class="form-group">
                        <label for="observaciones" class="col-form-label">Observacion:</label>
                        <textarea class="form-control" id="observaciones"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">MES</label>
                        <input type="text" class="form-control" id="monto_cuotas_internet">
                      </div>
                      <button type="button" id="enviar" class="btn btn-primary">Guardar</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>



      <div class="row p-4">

      <div class="card">
      

      </div>
      </div>
            



        <?php // fin MODAL para registro     ?> 

       