<?php
include 'Config.php';
include 'conexion.php';
session_start();


$User=$_POST['user'];
$Password=$_POST['pass'];
    $sql= "SELECT COUNT(usuario) AS num FROM usuarios WHERE usuario = :User";
    $verificacionU = $pdo->prepare($sql);
    $verificacionU->bindParam(":User",$User);
    $verificacionU->execute();
    $rowU = $verificacionU->fetch(PDO::FETCH_ASSOC);
    $sql2= "SELECT COUNT(pass) AS num2 FROM usuarios WHERE pass = :c";
    $verificacionC = $pdo->prepare($sql2);
    $verificacionC->bindParam(":c",$Password);
    $verificacionC->execute();
    $rowC = $verificacionC->fetch(PDO::FETCH_ASSOC);
    
  if (!$rowU['num']>0 or !$rowC['num2']>0) { 
    if ($rowU['num']>0 ) {
        header('Location: index.php');
    ?><script>alert("No existe una cuenta asociada a ese usuario")</script><?php
    }

    else {
        header('Location: index.php');
    ?><script>alert("Contraseña incorrecta") ;
    </script><?php
      
    }
  }else{
    header('Location: menu.php');
    ?><script>alert("Ingreso correctamente");
   
    </script><?php

  }

