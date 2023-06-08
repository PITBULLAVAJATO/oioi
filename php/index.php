<?php 
$dbHost ="localhost"; ///o nome do serv
$dbUsername= "root"; ///xamp
$dbPassword="";
$dbname="formulario"; ///nome do projeto

$conn= new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);


if($conn->connect_error){
    echo"erro";
}else{
    echo "conectado";
    echo "<h1> bem vindo </h1>";
    }
    ?>
