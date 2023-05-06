<?php

//if(isset($_POST['submit'])){
 //     print_r($_POST['nome']);
 //   print_r($_POST['comentario']);
//}

if(isset($_POST['submit'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];

    $result = mysqli_query($conexao, "INSERT INTO comentarios(nome,comentario) VALUES ('$nome','$comentario')");
};


?>