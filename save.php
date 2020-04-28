<?php

include('db.php');

if (isset($_POST['save'])) {
  $c= $_POST['codigo'];
  $p = $_POST['producto'];
  $i = $_POST['inventario'];
  $pu = $_POST['preciou'];
  $d = $_POST['descuento'];

  $query = "  INSERT INTO `producto`
  (`idproducto`,
  `Nombre`,
  `inventario`,
  `unidad`,
  `descuento`)
  VALUES
  ('$c','$p', '$i','$pu', $d);";


  
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto guardado correcamente';
  $_SESSION['message_type'] = 'success';
  header('Location: menu.php');

}

?>
