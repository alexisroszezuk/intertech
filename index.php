<?php include_once("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container-fluid p-4">
  <div class="row">
    
      <div class="card card-header text-center bg-info text-white col-md-4">
        <h5 class="">Carga Tareas</h5>
      <?php 
      //alerta para mostrar si se guardó correctamente
        if(isset($_SESSION['message'])){ ?>
          <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
          <?=  $_SESSION['message'];    ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>


        <?php session_unset(); };     //fin de alerta     ?>
     
      
     

          <div class="card card-body">
              <form action="add_taks.php" method="POST">

                  <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="task Title" autofocus>
                  </div>

                  <div class="form-group">
                    <textarea name="description" class="form-control" rows="3" placeholder="Descripcion"></textarea>
                  </div>

                  <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
              </form>
          </div>

      </div>
      <div class="card card-header bg-info text-white col-md-8">
        <h5 class="text-center">Listado de Tareas</h5>
        <div class="card card-body text-center ">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Título  </th>
                <th>Descripcion</th>
                <th>Creación</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php //Consulta a la Base De Datos  
                $query= "SELECT * FROM task";
                $result_task = mysqli_query($conn,$query);

                while($row = mysqli_fetch_array($result_task)){ ?>
                  <tr>
                    <td> <?php echo $row['title'] ?></td>
                    <td> <?php echo $row['description'] ?></td>
                    <td> <?php echo $row['create_at'] ?></td>
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
</div>

<?php include("includes/footer.php") ?>

