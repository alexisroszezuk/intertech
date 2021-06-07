<?php include_once("../db.php") ?>
<?php include("../includes/header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajas</title>
</head>
<body>
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

</body>
</html>