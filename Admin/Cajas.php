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



  

</div>             

<?php include("../includes/footer.php") ?>

</body>
</html>