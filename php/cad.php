<?php
include 'index.php';

$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];
$bairro= $_POST['bairro'];
$nascimento= $_POST['nascimento']; 

$sql="INSERT INTO form (nome,email,telefone,endereco,bairro,nascimento) VALUES ('$nome','$email','$telefone','$endereco','$bairro','$nascimento')";
$result= mysqli_query($conn,$sql);

if($result){
    echo "dados salvos";
    header('location:index.html'); ///aqui seria o nome da pagina principal "main", ele voltaria pra ela apos todos os dados feitos
}else{
    echo"error...tente novamente"; ///ele vai dar erro ao iniciar os dados errados
}
?>