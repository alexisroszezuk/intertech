<?php
include("db.php");
//Si recibo información en POST lo Guardo
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
  
    // Guardar en Base de Datos
    $query = "INSERT INTO task(title, description) VALUES('$title','$description') ";
    $result = mysqli_query($conn,$query);
    if (!$result){
        die("Query Failed");
        
    }
    //para guardar  un mensaje y llevarlo a la pagina index
    $_SESSION['message'] = 'Guardado Correctamente';
    $_SESSION['message_type'] = 'success';

    //redireccion a la pagina
    header("Location:index.php");
}
 ?>