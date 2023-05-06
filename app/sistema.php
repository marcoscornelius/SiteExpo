<?php
include_once('config.php');
$sql = "SELECT nome,comentario FROM comentarios where aceito = 'sim' ORDER BY idcomentarios DESC";
$resultado = $conexao->query($sql);

?>