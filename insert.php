<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- insertar -->
      <div class="card card-body">
        <form action="save.php" method="POST">
          <div class="form-group">
          <input type="text" name="codigo" class="form-control" placeholder="Código" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="producto" class="form-control" placeholder="Producto" >
          </div>
          <div class="form-group">
          <input type="text" name="inventario" class="form-control" placeholder="Cantidad">
          </div>
          <div class="form-group">
          <input type="text" name="preciou" class="form-control" placeholder="Precio" >
          </div>
          <div class="form-group">
          <input type="text" name="descuento" class="form-control" placeholder="Porcentaje" >
          </div>
          <input type="submit" name="save"  class="btn btn-primary btn-block" value="Guardar Producto">
        </form>
      </div>
    </div>
    
  </div>
</main>

<?php include('includes/footer.php'); ?>
