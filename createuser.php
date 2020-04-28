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
        <form action="saveuser.php" method="POST">
          <div class="form-group">
          <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="contraseña" class="form-control" placeholder="Contraseña" >
          </div>
          
          <input type="submit" name="saveuser"  class="btn btn-primary btn-block" value="Guardar">
        </form>
      </div>
    </div>
    
  </div>
</main>

<?php include('includes/footer.php'); ?>
