


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilo.css">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg bg-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url}}">Ustart </a>
            <button class="navbar-toggler btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url}}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscricoes">Inscrições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url}}/sobre">sobre</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
<body>
<div class="box">
    <form action="">
        <fieldset>
            <legend>Deixe seu comentário sobre o Site:</legend>
            <br>
            <div class="imputbox">
                <input type="text" name="nome" id="nome" class="imputUser">
                <label for="nome">Digite seu nome</label>
            </div>
            <br>
            <div class="imputbox">
                <input type="text" name="comentario" id="comentario" class="imputUser">
                <label for="nome">Digite seu comentário</label>
            </div>
            <br>
            <imput type="submit" name="submit" id="submit">
        </fieldset>
    <form>
</div>

    <div class="container" >
        <?php print_r($_GET); ?>
    </div>
    {{header}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>