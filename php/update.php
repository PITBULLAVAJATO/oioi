<?php
include_once 'index.php';

      if (isset($_POST['atualizar'])) {

        if(!empty($_POST['nome']) && !empty($_POST['']) && !empty($_POST[''])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['nascimento'];
        $bairro = $_POST['bairro'];

        
    }
        $sql = "UPDATE form SET nome = '$nome',nome_usuario ='$categoria_atual', preco = 'preco_atual' WHERE id_livro = '$id_recebido";
        $result = mysqli_query($conn, $sql);
    
        if ($result ){ 
            echo '<script>';
            echo 'alert("Atualizado com sucesso");';
            echo '</script>';
        } 
    
    }
    ?>
    