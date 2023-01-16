<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title> {{ $titulo }} </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/arma">Armas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/condicao">Condição</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" /veiculo">Veiculo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" /ocorrencia">CheckList</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href=" /carrocheck">Verificar</a>
                    </li>
                    @auth
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href='logout'>Sair</a>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <h1>{{ $titulo }}</h1>

        {{ $slot }}

        
    </div>
</body>
</html>
