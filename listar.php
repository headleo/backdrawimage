<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Draw Idea - Listar os usuarios</title>
</head>

<body>
<CENter> <h1>DRAW IDEA</h1> </CENter>
<CENter><a href="https://cosmic-sunburst-71b161.netlify.app/" target="_blank" style="color: white">acessar o quadro canvas</a></CENter>
    <a href="listar.php"style="color: white">Listar</a><br>
    <a href="upload.php"style="color: white">Cadastrar</a><br>
    <a href="sair.php"style="color: white">Sair</a><br>

    <h2>Listar Imagens</h2>

    <?php

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $query_usuarios = "SELECT id, nome_usuario, email_usuario, foto_usuario FROM usuarios2 where nome_usuario = 'projeto123' ORDER BY id 
     DESC";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_usuario);
        extract($row_usuario);
        //echo "ID: " . $row_usuario['id'] . "<br>";
        echo "ID: $id <br>";
        echo "Nome do Projeto: $nome_usuario <br>";
        echo "E-mail: $email_usuario <br>";
        echo "Foto: $foto_usuario <br>";    
        //echo "<img src='imagens/" . $row_usuario['id'] . "/" . $row_usuario['foto_usuario'] ."' width='150'>";
        

        if((!empty($foto_usuario)) and (file_exists("imagens/$id/$foto_usuario"))){
            echo "<img src='imagens/$id/$foto_usuario' width='300'><br>";
            echo "<a href='imagens/$id/$foto_usuario' download>Download</a><br><br>";
        }else{
            echo "<img src='imagens/icon_user.png' width='150'><br>";
            //echo "<a href='imagens/$id/$foto_usuario'>Download</a>";
        }

        echo "<a href='visualizar.php?id=$id'>Visualizar</a><br>";

        echo "<hr>";
    }

    ?>

</body>

</html>

<style>
body{
   
    font-family: "Mukta";
    
    background: #313131;
    color: white;
    
}

.modal-dialog{
    
    font-family: "Mukta";
    
    background: #313131;
    color: black;
}

</style>