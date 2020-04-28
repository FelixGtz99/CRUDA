<?php
include("db.php");
$c = '';
$p= '';
$i= '';
$pu= '';
$d= '';

if  (isset($_GET['idproducto'])) {
  $id = $_GET['idproducto'];
  $query = "SELECT * FROM `producto` WHERE idproducto=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $c= $row['idproducto'];
  $p = $row['Nombre'];
  $i = $row['inventario'];
  $pu = $row['unidad'];
  $d = $row['descuento'];
  }

}

if (isset($_POST['update'])) {
  $id = $_GET['idproducto'];
  $c= $_POST['codigo'];
  $p = $_POST['producto'];
  $i = $_POST['inventario'];
  $pu = $_POST['preciou'];
  $d = $_POST['descuento'];
  $query = "UPDATE `producto` SET `idproducto` = '$c', `Nombre` = '$p',  inventario '$i', unidad = '$pu',
  descuento = '$d'
  WHERE idproducto = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: menu.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idproducto=<?php echo $_GET['idproducto']; ?>" method="POST">
     
        <div class="form-group">
          <input type="text" name="codigo" class="form-control" placeholder="Código" value="<?php echo $c; ?>" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="producto" class="form-control" placeholder="Producto" value="<?php echo $p; ?>" >
          </div>
          <div class="form-group">
          <input type="text" name="inventario" class="form-control" placeholder="Cantidad"value="<?php echo $i; ?>" >
          </div>
          <div class="form-group">
          <input type="text" name="preciou" class="form-control" placeholder="Precio"value="<?php echo $pu; ?>"  >
          </div>
          <div class="form-group">
          <input type="text" name="descuento" class="form-control" placeholder="Porcentaje"value="<?php echo $d; ?>"  >
          </div>
          
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
