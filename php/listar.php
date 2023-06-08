<?php
include 'index.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereco</th>
      <th scope="col">Bairro</th>
      <th scope="col">nascimento</th>
    </tr>
    <?php
        $sql = "SELECT * FROM form";
        $result = mysqli_query($conn, $sql);
        if ($result){
          while ($row = mysqli_fetch_assoc($result)){
            $id_form= $row['id_form'];
            $nome= $row['nome'];
            $email= $row['email'];
            $telefone= $row['telefone'];
            $endereco= $row['endereco'];
            $bairro= $row['bairro'];
            $nascimento= $row['nascimento'];
            echo '<tr>
                  <th scope="row">'.$id_form.'</th>
                  <td>'.$nome.'</td>
                  <td>'.$email.'</td>
                  <td>'.$telefone.'</td>
                  <td>'.$endereco.'</td>
                  <td>'.$bairro.'</td>
                  <td>'.$nascimento.'</td>
                  <td>
                    <a class="btn btn-primary" href="update.php?id_form='.$id_form.'" > <i class=""></i>EDIT</a>
                    <a class="btn btn-danger" href="delete.php?id_form='.$id_form.'"> <i class=""></i>X</a>
                  </td>
                </tr>
                ';
              }
        }
      ?>

  </thead>
  <tbody>
   
  </tbody>
</table>









    
</body>
</html>