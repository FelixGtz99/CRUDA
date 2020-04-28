<?php

include('db.php');

if (isset($_POST['saveuser'])) {
  $u= $_POST['usuario'];
  $p = $_POST['contraseña'];
 

  $query = "  INSERT INTO `usuarios`
  (`usuario`,
  `pass`)
  VALUES
  ('$u','$p');";


  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto guardado correcamente';
  $_SESSION['message_type'] = 'success';
  header('Location: menu.php');

}

?>
