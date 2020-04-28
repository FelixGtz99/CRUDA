<?php

include("db.php");

if(isset($_GET['idproducto'])) {
  $id = $_GET['idproducto'];
  $query = "DELETE FROM producto WHERE idproducto = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: menu.php');
}

?>
