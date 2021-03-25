<?php
include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $resultado = mysqli_query($conn,$query);
        if (!$resultado){
            die("Query Failed");

        }
    //para guardar  un mensaje y llevarlo a la pagina index
    $_SESSION['message'] = 'Eliminado Correctamente';
    $_SESSION['message_type'] = 'danger';

    //redireccion a la pagina
    header("Location:index.php");
    }

?>