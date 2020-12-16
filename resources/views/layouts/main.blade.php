<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- CSS customizados -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nv">
        <a class="navbar-brand" href="/">
            <img src="/img/hdcevents_logo.svg" width="30" height="30" alt="HDC Events">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos <span class="sr-only">(current)</a>
                </li>
                
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>

                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <div class="toast" id="myToast" style="position: absolute; top: 1%; right: 1%; z-index: 999;">
                        <div class="toast-header bg-success text-white">
                            <strong class="mr-auto"><ion-icon name="checkmark-outline"></ion-icon> Sucesso</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <div>{{ session('msg') }}</div>
                        </div>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    
    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>

    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Javascript -->
    <script src="/js/scripts.js"></script>
</body>
</html>
