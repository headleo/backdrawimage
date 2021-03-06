<?php
session_start();
ob_start();
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Draw Idea - Detalhes do usuario</title>
</head>

<body>
<CENter> <h1>DRAW IDEA</h1> </CENter>
<CENter><a href="https://cosmic-sunburst-71b161.netlify.app/" target="_blank" style="color: white">acessar o quadro canvas</a></CENter>
    <a href="listar.php" style="color: white">Listar</a><br>
    <a href="upload.php" style="color: white">Cadastrar</a><br>
    <a href="sair.php" style="color: white">Sair</a><br>

    <h2>Detalhes do Usuário</h2>

    <?php

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if (!empty($id)) {
        $query_usuario = "SELECT id, nome_usuario, email_usuario, foto_usuario, created, modified FROM usuarios2 WHERE id=:id LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':id', $id);
        $result_usuario->execute();

        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_usuario);
        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome do Projeto: $nome_usuario <br>";
        echo "E-mail: $email_usuario <br>";
        echo "Foto: $foto_usuario <br>";
        echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)) . " <br>";

        
        if(!empty($modified)){
            echo date('d/m/Y H:i:s', strtotime($modified));
        }
        echo "<br><br>";

        if ((!empty($foto_usuario)) and (file_exists("imagens/$id/$foto_usuario"))) {
            echo "<img src='imagens/$id/$foto_usuario' width='1000'><br>";
            echo "<a href='imagens/$id/$foto_usuario' download>Download</a><br><br>";
        } else {
            echo "<img src='imagens/icon_user.png' width='1000'><br>";
        }
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Necessário selecionar o usuário!</p>";
        header("Location: teste2.php");
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
