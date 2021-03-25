<?php include_once("../db.php") ?>
<?php include("../includes/header.php") ?>

<div class="container p-4">
  <div class="row">
   
      <div class="col-md-8">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>idcliente  </th>
                <th>nombre</th>
                <th>Dni</th>
                <th>Domicilio</th>
                <th>Localidad</th>
                <th>Provincia</th>
                <th>Ocupacion</th>
                <th>Sueldo</th>
                <th>Domicilio Trabajo</th>
                <th>Celular</th>

              </tr>
            </thead>
            <tbody>
              <?php //Consulta a la Base De Datos  
                $query= "SELECT * FROM CLIENTES";
                $result_task = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result_task)){ ?>
                  <tr>
                    <td> <?php echo $row['idcliente'] ?></td>
                    <td> <?php echo $row['nombre'] ?></td>
                    <td> <?php echo $row['dni'] ?></td>
                    <td> <?php echo $row['domicilio'] ?></td>
                    <td> <?php echo $row['localidad'] ?></td>
                    <td> <?php echo $row['provincia'] ?></td>
                    <td> <?php echo $row['ocupacion'] ?></td>
                    <td> <?php echo $row['sueldo'] ?></td>
                    <td> <?php echo $row['domicilio_trabajo'] ?></td>
                    <td> <?php echo $row['celular'] ?></td>
                    <td>
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
          </table>
      </div>
  </div>
</div>















<?php include("../includes/footer.php") ?>