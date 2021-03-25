<?php include_once("../db.php") ?>
<?php include("../includes/header.php") ?>


<div class="container-fluid p-4">
 <div class="row">
 <div class="card col-md-2">
    <div class="card-header text-center text-white bg-info">
      Cuotas Internet
    </div>
    <div class="card-body">
      <h5 class="card-title text-center">
      
      <?php //Consulta a la Base De Datos  
                $query= "SELECT SUM(MONTO) as totalGastos FROM GASTOS where CAJA='CUOTAS INTERNET' ";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastos = 0.00;
                $sumGastos = $row['totalGastos'];
            

                $query2="SELECT SUM(MONTO_CUOTAS_INTERNET) as totalIngresoCuotas FROM INGRESO_CAJA";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotas = 0.00;
                $sumIngresosCuotas = $filasdeIngreso['totalIngresoCuotas'];
                
                $totaldeCajaCuotas = $sumIngresosCuotas - $sumGastos;
                echo '$'. ' '.$totaldeCajaCuotas;

                 ?>
      </h5>
    </div>
</div>
<div class="card col-md-2">
    <div class="card-header text-center text-white bg-info">
      Mercado Pago
    </div>
    <div class="card-body">
      <h5 class="card-title text-center">
      <?php //Consulta a la Base De Datos  
                $query= "SELECT SUM(MONTO) as totalGastosMP FROM GASTOS where CAJA='MERCADOPAGO' ";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastosMP = 0.00;
                $sumGastosMP = $row['totalGastosMP'];
            

                $query2="SELECT SUM(MONTO_MERCADOPAGO) as totalIngresoMP FROM INGRESO_CAJA";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotasMP = 0.00;
                $sumIngresosCuotasMP = $filasdeIngreso['totalIngresoMP'];
                
                $totaldeCajaCuotasMP = $sumIngresosCuotasMP - $sumGastosMP;
                echo '$'. ' '.$totaldeCajaCuotasMP;

                 ?>  
      
      </h5>
    </div>
</div>
<div class="card col-md-2">
    <div class="card-header text-center text-white bg-info">
      Instalaciones
    </div>
    <div class="card-body">
      <h5 class="card-title text-center">
      <?php //Consulta a la Base De Datos  
                $query= "SELECT SUM(MONTO) as totalGastosINST FROM GASTOS where CAJA='INSTALACIONES' ";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastosINS = 0.00;
                $sumGastosINS = $row['totalGastosINST'];
            

                $query2="SELECT SUM(MONTO_INSTALACIONES) as totalIngresoINS FROM INGRESO_CAJA";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotasINS = 0.00;
                $sumIngresosCuotasINS = $filasdeIngreso['totalIngresoINS'];
                
                $totaldeCajaCuotasINS = $sumIngresosCuotasINS - $sumGastosINS;
                echo '$'. ' '.$totaldeCajaCuotasINS;

                 ?>  
                

                </h5>
              </div>
          </div>
          <div class="card col-md-2">
              <div class="card-header text-center text-white bg-info">
                Productos
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">
                <?php //Consulta a la Base De Datos  
                $query= "SELECT SUM(MONTO) as totalGastosCuotaPro FROM GASTOS where CAJA='CUOTAS PRODUCTOS' " ;
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastosCuotasPro = 0.00;
                $sumGastosCuotasPro = $row['totalGastosCuotaPro'];

                $query= "SELECT SUM(MONTO) as totalGastosPro FROM GASTOS where CAJA='PRODUCTOS' ";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastosPro = 0.00;
                $sumGastosPro = $row['totalGastosPro'];
                $totalgastosproductos = $sumGastosCuotasPro + $sumGastosPro;

                $query2="SELECT SUM(MONTO) as totalPagoCuotasPro FROM PAGOS";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotasProducto = 0.00;
                $sumIngresosCuotasProducto = $filasdeIngreso['totalPagoCuotasPro'];
                
                $query2="SELECT SUM(SUB_TOTAL) as totalVentasPro FROM VENTAS";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosVentaProducto = 0.00;
                $sumIngresosVentaProducto = $filasdeIngreso['totalVentasPro'];

                $totalIngresosPRoductos = $sumIngresosCuotasProducto + $sumIngresosVentaProducto;

                $totalcajaproductos = $totalIngresosPRoductos - $totalgastosproductos;
                echo $totalcajaproductos;
                 ?>  
                
                </h5>
              </div>
          </div>
          <div class="card col-md-2">
              <div class="card-header text-center text-white bg-info">
                Banco
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">
                <?php //Consulta a la Base De Datos  
                $query= "SELECT SUM(MONTO) as totalGastosBANCO FROM GASTOS where CAJA='BANCO' ";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumGastosBANCO = 0.00;
                $sumGastosBANCO = $row['totalGastosBANCO'];
            

                $query2="SELECT SUM(MONTO_BANCO) as totalIngresoBANCO FROM INGRESO_CAJA";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotasBANCO = 0.00;
                $sumIngresosCuotasBANCO = $filasdeIngreso['totalIngresoBANCO'];
                
                $totaldeCajaCuotasBANCO = $sumIngresosCuotasBANCO - $sumGastosBANCO;
                echo '$'. ' '.$totaldeCajaCuotasBANCO;

                 ?>  
                
   

                </h5>
              </div>
          </div>
          <div class="card col-md-2 text-center text-white bg-info">
              <div class="card-header ">
                Total Sistema
              </div>
              <div class="card-body">
                <h5 class="card-title text-center  ">
                <?php //Consulta a la Base De Datos  
                $fecha_actual = date("Y/m");
                $query= "SELECT SUM(TOTAL_SISTEMA) as TotalSistema FROM INGRESO_CAJA WHERE MES = '$fecha_actual'";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                $sumSistema = 0.00;
                $sumSistema = $row['TotalSistema'];
                echo '$'. ' '.$sumSistema;

                 ?>  

                </h5>
              </div>
          </div>

        </div>

        <?php //MODAL para registro     ?>  
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-white bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">Nueva Caja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="nuevacaja.php" method="POST" >
                    <div class="form-group">
                        <label for="monto_cuotas_internet" class="col-form-label">Fechas</label>
                        <input type="date" class="form-control" id="monto_cuotas_internet">
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
                      <button type="submit" class="btn btn-primary">Guardar</button>
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
<div class="row p-4">
<div class="card col-md-12">
    <div class="card-header text-white bg-primary text-center">
      Listado Ingreso Cajas
    </div>
    <div class="card-body">
    <div class="table-responsive">


    <table id="example" class="table table-striped table-bordered samall" style="font-size: 15px;">
        <thead>
            <tr>
                <th>N°</th>
                <th>F CAJA</th>
                <th>FECHA</th>
                <th>CUOTAS</th>
                <th>INST</th>
                <th>MERPAGO</th>
                <th>BANCO</th>  
                <th>OBSERVACIONES</th>
                <th>MES</th>
                <th>SISTEMA</th>
                <th>EDITAR</th>
            </tr>
        </thead>
        <tbody>
        <?php //Consulta a la Base De Datos  
                $query= "SELECT * FROM INGRESO_CAJA WHERE MES = '$fecha_actual'";
                $result_task = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result_task)){ ?>
                  <tr>
                    <td > <?php echo $row['ID'] ?></td>
                    <td > <?php echo $row['FECHA_CAJA'] ?></td>
                    <td > <?php echo $row['FECHA'] ?></td>
                    <td > <?php echo $row['MONTO_CUOTAS_INTERNET'] ?></td>
                    <td > <?php echo $row['MONTO_INSTALACIONES'] ?></td>
                    <td > <?php echo $row['MONTO_MERCADOPAGO'] ?></td>
                    <td > <?php echo $row['MONTO_BANCO'] ?></td>
                    <td > <?php echo $row['OBSERVACIONES'] ?></td>
                    <td > <?php echo $row['MES'] ?></td>
                    <td > <?php echo $row['TOTAL_SISTEMA'] ?></td>
                    <td >
                      <a class="btn btn-secondary" href="edit_taks.php?id=<?php echo $row['id']?>">
                        <i class="fa fa-marker"></i>
                    </a>
                      <a class="btn btn-danger" href="delete_taks.php?id=<?php echo $row['id']?>">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                    </td>
                  </tr>

                <?php }?>
          
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>FECHA CAJA</th>
                <th>FECHA</th>
                <th>MONTO CUOTAS</th>
                <th>INSTALACIONES</th>
                <th>MERCADOPAGO</th>
                <th>BANCO</th>
                <th>OBSERVACIONES</th>
                <th>MES</th>
                <th>TOTAL SISTEMA</th>
                <th>EDITAR</th>

            </tr>
        </tfoot>
    </table>
    </div>
          
        </div>
    </div>
  </div>
</div>             

<?php include("../includes/footer.php") ?>
<SCript>
  $(document).ready(function() {
    $('#example').DataTable({
        "order": [[ 0, "desc" ]]
    });
} );
</SCript>
