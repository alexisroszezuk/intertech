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
  
     
      
      <?php //Consulta a la Base De Datos  
                $fecha_actual = date("Y/m");
            
                $fecha = date('Y/m/j');
                $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
                $nuevafecha = date ( 'Y/m' , $nuevafecha );
                echo $nuevafecha;
                    //SELECT IDCATEGORIA,NOMBRE_CATEGORIA,SUM(MONTO) AS TOTAL,MES FROM GASTOS WHERE MES = '$nuevafecha' AND CAJA NOT IN('INSTALACIONES','CUOTAS PRODUCTOS','PRODUCTOS')  GROUP BY IDCATEGORIA order by TOTAL DESC
                $query= "SELECT CAJA,SUM(MONTO) AS TOTAL,MES FROM GASTOS WHERE MES = '$nuevafecha'  GROUP BY CAJA order by TOTAL DESC";
                $result_task = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result_task);
                while($row = mysqli_fetch_array($result_task)){ ?>
                     <div class="card-body">
                    <h5 class="card-title text-center">

                      <?php echo $row['CAJA'] ?>
                                            
                      </h5>
                      <?php echo $row['TOTAL'] ?>
                     
                      </div>
                    
                  <?php }?>
                  <?php

                $query2="SELECT SUM(MONTO_CUOTAS_INTERNET) as totalIngresoCuotas FROM INGRESO_CAJA";
                $resultadosIngresos = mysqli_query($conn,$query2);
                $filasdeIngreso = mysqli_fetch_array($resultadosIngresos);
                $sumIngresosCuotas = 0.00;
                $sumIngresosCuotas = $filasdeIngreso['totalIngresoCuotas'];
                
                $totaldeCajaCuotas = $sumIngresosCuotas - $sumGastos;
                //echo '$'. ' '.$totaldeCajaCuotas;

                 ?>
      
   
</div>



  

</div>             

<?php include("../includes/footer.php") ?>

</body>
</html>