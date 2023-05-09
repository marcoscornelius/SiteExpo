<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilo.css">
    <title>Document</title>
</head>
<?php
include('../resources/view/pages/header.html')
?>
<body id="b2">
    <section class="page-contato fundo-contato">
            <div>
                    <div class="contato-texto"> Nome: Marcos Cornelius</div>
                    <div class="contato-texto"> Idade: 28 anos</div>
                    <div class="contato-texto"> Cidade: Carazinho/RS</div>
                    <div class="contato-texto">  Telefone/whats: (54)999010774</div>
            </div>
            <div>
                <div class="contato-texto"> Email: Marcoscornelius@hotmail.com</div>
                    <div class="contato-texto ">  facebook: <a href='https://www.facebook.com/marcos.cornelius/'>https://www.facebook.com/marcos.cornelius</a></div>
                    <div class="contato-texto ">  Instagram: <a href='https://www.instagram.com/marcos.cornelius'>https://www.instagram.com/marcos.cornelius</a></div>
                    <div class="contato-texto "> linkedin: <a href='https://www.linkedin.com/in/marcos-cornelius-65919625a'>https://www.linkedin.com/in/marcos-cornelius-65919625a</a></div> 
            </div>
    </section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../resources/imagens/imagem2.avif" class="img-contato" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../resources/imagens/imagem3.avif" class="img-contato" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../resources/imagens/imagem4.avif" class="img-contato" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <form action="../app/solicitacao.php" method="POST">
                <div class="caixa-solicitacao container">
                    <div class="solicite">Solicite o envio de um currículo para mais informações</div>
                    <br>
                    <div class="">
                        <label for="nome">Nome/Empresa</label>
                        <input type="text" name="nome" id="nome" class="imput-solicitacao"> 
                    </div>
                    <br>
                    <div class="">
                            <label for="empresa">E-mail para recebimento</label>
                            <input type="text" name="nome" id="nome" class="imput-solicitacao">
                    </div>
                    <br>
                    <button type="submit" name="submit" id="submit">Enviar</button>
                </div>
        <form>
         
       
    <?php
    include('../resources/view/pages/footer.html')
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>