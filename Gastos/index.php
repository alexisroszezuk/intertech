<?php include_once("../db.php") ?>
<<<<<<< HEAD
<?php include("../../INTERTECH/includes/header.php") ?>
<?php include("../../INTERTECH/Gastos/modal_nuevo.php") ?>
=======
>>>>>>> 96507124843be0d12caf6c7ed1ee290ac18d164e
<div class="container-fluid ">
  <div class="row p-1">
    <div class="card">
      
      <div class="card-body">
        <button class="button btn-success ">
          <a href=""data-toggle="modal" data-target="#nuevogasto" data-whatever="@mdo" class="text-white">Nuevo Gasto</a>
        </button>
      </div>
    </div>
  </div>
  <div class="row p-2">
    
      <div class="card card-header text-center bg-info text-white col-md-6">
        <h5 class="">Listado Gastos Mes: </h5>
        
      <?php
      $fecha_actual = date("Y/m");
      
      $fecha = date('Y/m/j');
      $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
      $nuevafecha = date ( 'Y/m' , $nuevafecha );
      echo $nuevafecha;
      //sumo 1 día
     // echo date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
      //resto 1 día
      
      //alerta para mostrar si se guardó correctamente
        if(isset($_SESSION['message'])){ ?>
          <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
          <?=  $_SESSION['message'];    ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>


        <?php session_unset(); };     //fin de alerta     ?>
     
      
     

          <div class="card card-body text-center">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>IDCATEGORIA</th>
                <th>NOMBRE</th>
                
                <th>MONTO</th>
                
              </tr>
            </thead>
            <tbody>
              <?php //Consulta a la Base De Datos  
              
                $query= "SELECT IDCATEGORIA,NOMBRE_CATEGORIA,SUM(MONTO) AS TOTAL,MES FROM GASTOS WHERE MES = '$nuevafecha' AND CAJA NOT IN('INSTALACIONES','CUOTAS PRODUCTOS','PRODUCTOS')  GROUP BY IDCATEGORIA order by TOTAL DESC
                ";
                $result_task = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result_task)){ ?>
                  <tr>
                
                    <td> <?php echo $row['IDCATEGORIA'] ?></td>
                    <td> <?php echo $row['NOMBRE_CATEGORIA'] ?></td>
                    
                    <td> <?php echo $row['TOTAL'] ?></td>
                    
                    
                    
                  </tr>

                <?php }?>
              
              
            </tbody>
          </table>
          </div>

      </div>
      <div class="card card-header bg-info text-white col-md-6 text-center">
        <h5 class="">Listado de Gastos del Mes</h5>
        <?php echo $fecha_actual;//   ?>
        
        <div class="card card-body text-center ">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>IDCATEGORIA</th>
                <th>NOMBRE</th>
                
                <th>MONTO</th>
                
              </tr>
            </thead>
            <tbody>
              <?php //Consulta a la Base De Datos  
              
                $query= "SELECT IDCATEGORIA,NOMBRE_CATEGORIA,SUM(MONTO) AS TOTAL,MES FROM GASTOS WHERE MES = '$fecha_actual' AND CAJA NOT IN('INSTALACIONES','CUOTAS PRODUCTOS','PRODUCTOS')  GROUP BY IDCATEGORIA order by TOTAL DESC
                ";
                $result_task = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result_task)){ ?>
                  <tr>
                
                    <td> <?php echo $row['IDCATEGORIA'] ?></td>
                    <td> <?php echo $row['NOMBRE_CATEGORIA'] ?></td>
                    
                    <td> <?php echo $row['TOTAL'] ?></td>
                    
                    
                    
                  </tr>

                <?php }?>
              
              
            </tbody>
          </table>
      </div>
      </div>
  </div>
  <div class="row p-2">
  <div class="card card-header bg-info text-white col-md-12 ">
        <h5 class="text-center">Listado de Gastos del Mes</h5>
        <div class="card card-body text-center ">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>IDCATEGORIA</th>
                <th>Nombre Cate</th>
                <th>id sub</th>
                <th>MONTO</th>
                <th>sUBCATEGORIA</th>
                
              </tr>
            </thead>
            <tbody>
              <?php //Consulta a la Base De Datos  
              
                $query2= "SELECT IDCATEGORIA,IDSUBCATEGORIA,SUB_CATEGORIA,NOMBRE_CATEGORIA,SUM(MONTO) AS TOTAL,MES FROM GASTOS WHERE MES = '$fecha_actual' AND CAJA NOT IN ('INSTALACIONES','PRODUCTOS','CUOTAS PRODUCTOS') GROUP BY IDSUBCATEGORIA order by IDCATEGORIA DESC";
                $ResultadoSubcategoria = mysqli_query($conn,$query2);

                while($FilasSubcategoria = mysqli_fetch_array($ResultadoSubcategoria)){ ?>
                  <tr>
                
                    <td> <?php echo $FilasSubcategoria['IDCATEGORIA'] ?></td>
                    <td> <?php echo $FilasSubcategoria['NOMBRE_CATEGORIA'] ?></td>
                    <td> <?php echo $FilasSubcategoria['IDSUBCATEGORIA'] ?></td>
                    <td> <?php echo $FilasSubcategoria['TOTAL'] ?></td>
                    <td> <?php echo $FilasSubcategoria['SUB_CATEGORIA'] ?></td>
                    
                  
             
                    
                    
                    
                  </tr>

                <?php }?>
              
              
            </tbody>
          </table>
      </div>
      </div>

  </div>
</div>



<?php include("../../INTERTECH/includes/footer.php") ?>