<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilo.css">
    
    <title>Site Marcos</title>
    <?php
   
    ?>
</head>
<?php
include('../resources/view/pages/header.html')
?>
<body id="b1">
    <section class="banner">
        <h1 class="text-white justify-content-center d-flex">
            Seja bem vindo!
        </h1>
        <br>
        <div id="containerdesc" class=" justify-content-between justify-content-center">
            <h4 id="descricao"  class=" text-white">
                 Este site foi desenvolvido com o intúito de expor meu trabalho, realizar testes e aplicar meu conhecimento na area de programação e desenvolvimento de sistemas.
                 O site conta com um banco de dados SQL que vai armazenar as informações que você preencher nos campos de texto.
                 Inspecione o site, teste sua responsividade em diferentes resoluções, avalie o código.
            </h4>
            <div class="box" id="box2">
                <form action="" method="post">
                    <fieldset>
                        <legend>
                            Deixe sua nota para o Site:
                        </legend>
                        <div class=" justify-content-around d-flex">
                                    <input type="radio" name="nota" id="nota1" value="nota1" >
                                    <label for="nota1">1</label>
                                    <input type="radio" name="nota" id="nota2" value="nota2" >
                                    <label for="nota2">2</label>
                                    <input type="radio" name="nota" id="nota3" value="nota3" >
                                    <label for="nota3">3</label>
                                    <input type="radio" name="nota" id="nota4" value="nota4" >
                                    <label for="nota4">4</label>
                                    <input type="radio" name="nota" id="nota5" value="nota5" >
                                    <label for="nota5">5</label>
                        </div>
                    </fieldset>
                </form>
            </div>   
        </div>       
    </section>
    <br>
    <div class="pt2">
        <table class="table table-dark table-striped">
            <thead class="tabela-head">
                <tr class="tabela-head">
                        <th  scope="col">Nome</th>
                        <th  scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody id="tabela-b">
                    <?php
                    include_once('../app/sistema.php');
                        while($user_data = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['comentario']."</td>";
                        }
                    ?>
            </tbody>
        </table>
        <div class="box" id="box1">
            <form action="../app/comentario.php" method="POST">
                <fieldset>
                    <legend>Deixe seu comentário sobre o Site</legend>
                    <br>
                    <div class="imputbox">
                        <label for="nome">Digite seu nome</label>
                        <input type="text" name="nome" id="nome" class="imputUser " required> 
                    </div>
                    <br>
                    <div class="imputbox">
                            <label for="comentario">Digite seu comentário</label>
                            <textarea name="comentario" id="comentario" rows="5" class="imputUser" required></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" id="submit">Enviar</button>
                </fieldset>
            <form>
        </div>   
    </div>
<section class="container container-conteudo pt-3">
    <h2 style="color: black; " id="conteudos">Conteúdos estudados</h2>
    <div class="row">
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    HTML
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/download.png" alt="Evento 01">
                <p> (Linguagem de Marcação de Hipertexto)
                     código utilizado para estruturar uma página web e seu conteúdo.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    CSS
                </h3>
                <div class="d-flex">
                    <img class="imagem-conteudo" src="../resources/imagens/css.png" alt="Evento 01">
                    <p>  (Folhas de Estilo em Cascata) é uma linguagem de estilo, usada para modelagem visual de elementos, definindo a aparência, tamanho, cor, localização e algumas outras funcionalidades, para customização visual    </p>
                 </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    PHP
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/php.png" alt="Evento 01">
                <p> (Pré-Processador de Hipertexto) O PHP é uma linguagem de programação voltada originalmente para desenvolvimento de sites e aplicações web, podendo também ser usada para desktop, trata-se de uma linguagem de scripts, ou seja, um conjunto de instruções via código que servem, principalmente, para automatizar tarefas.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    SQL
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/sql.png" alt="Evento 01">
                <p> 
                    (Linguagem de Consulta Estruturada) O SQL é uma linguagem utilizada para fazer manipulação dos registros de um banco de dados. Servindo para criar, inserir, atualizar, excluir e consultar as informações armazenadas na base de dados, além de outras diversas funções mais complexas. </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    JAVASCRIPT
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/javascript.png" alt="Evento 01">
                <p> 
                    O JS permite que usuários interajam com uma página, validando informações, auxiliando na manipulação da estrutura ou permitindo mais interações, animações, entre várias outras coisas. 
                </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    JAVA 
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/java.jpg" alt="Evento 01">
                <p> Java é, ao mesmo tempo, uma linguagem e uma plataforma. Como linguagem de programação, o código Java é baseado em classes e orientado a objetos, um sistema ou aplicação criado em Java pode ser rodado em praticamente qualquer ambiente ou dispositivo no qual o Java Virtual Machine esteja instalado.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    HTML
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/download.png" alt="Evento 01">
                <p> (Linguagem de Marcação de Hipertexto)
                     código utilizado para estruturar uma página web e seu conteúdo.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="card-body ">
                <h3 class="titulo-conteudo">
                    HTML
                </h3>
                <div class="d-flex">
                <img class="imagem-conteudo" src="../resources/imagens/download.png" alt="Evento 01">
                <p> (Linguagem de Marcação de Hipertexto)
                     código utilizado para estruturar uma página web e seu conteúdo.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('../resources/view/pages/footer.html')
?>
    <script type="text/javascript" src="../app/functions/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>