

<?php include('includes/header.php'); ?>
<div class="container p-4">
    <div class="col-m-4">
<div class="card card-body" >
    <form  id="formLogin" action="login.php" method="POST">
        .<div class="form-group">
        <label for="">Usuario <input type="text" name="user" id="user"></label>
          
        </div>
        <div class="form-group">
      
        <label for="">Contraseña <input type="text" name="pass" id="pass"></label>
        </div>


<button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>

</div></div>
<?php include('includes/footer.php'); ?>
