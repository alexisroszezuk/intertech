<?php
include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $resultado = mysqli_query($conn,$query);
        if (mysqli_num_rows($resultado)==1){
            $row = mysqli_fetch_array($resultado);
            $title = $row['title'];
            $description = $row['description'];
        }
    }
    
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn,$query);
         //para guardar  un mensaje y llevarlo a la pagina index
        $_SESSION['message'] = 'Actualizado Correctamente';
        $_SESSION['message_type'] = 'info';

      //redireccion a la pagina
        header("Location:index.php");
    }

?>

<?php 
    include("includes/header.php");?>


    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <card class="card card-body">
                    <form action="edit_taks.php?id=<?php echo $_GET['id'];?>" method="POST">
                        <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" rows="2"><?php echo $description;?></textarea>
                        </div>
                        <button class="btn btn-success" name="update"> 
                            Actualizar
                        </button>
                    </form>
                </card>
            </div>
        </div>
    </div>


   <?php include("includes/footer.php");?>
