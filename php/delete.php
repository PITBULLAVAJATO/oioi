<?php
include_once 'index.php';

if(isset($_GET['id_form'])){
  $id_recebido = $_GET['id_form'];
  $sql = "DELETE FROM form WHERE id_form='$id_recebido'";
  $result = mysqli_query ($conn,$sql);
  if($result){
      header('location:listar.php');
  }
    // echo "id recebido =".$id_recebido; 
}else{
      header('location:listar.php');
  }
?>

  