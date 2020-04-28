<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

  
  <button class="btn btn-primary" onclick="location.href='createuser.php'"> Crear usuario </button>
  <button class="btn btn-primary" onclick="location.href='insert.php'"> Añadir </button>
  <button class="btn btn-primary"  onclick="location.href='index.php'"> Salir </button>


<main class="container p-4">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
                    
                  
       
                    
                 
     
    </div>
    <div class="col-md-10">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Producto</th>
            <th>Inventario</th>
            <th>Precio Unitario</th>
            <th>Descuento</th>
            
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idproducto']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['inventario']; ?></td>
            <td><?php echo $row['unidad']; ?></td>
            <td><?php echo $row['descuento']; ?></td>
            <td>
              <a href="edit.php?idproducto=<?php echo $row['idproducto']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?idproducto=<?php echo $row['idproducto']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
