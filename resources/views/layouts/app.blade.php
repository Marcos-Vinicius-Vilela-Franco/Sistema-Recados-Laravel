<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
    body{
        height: 100vh;
        width: 100vw;
        background-image: radial-gradient(circle at 45.41% 102.45%, #b1b6ff 0, #7c92ff 25%, #6481d6 50%, #3e80dd 75%, #2a68ca 100%);
    }

    html,
    .body1 {
        height: 100%;
        
    }

    .body1 {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

</style>


    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 p-3">



            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Sistema de Recados</a>
                @auth
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link @if (request()->is('admin/recados')) active @endif" aria-current="page"
                                href="{{ route('admin.recados.index') }}">Home</a>
                            {{-- <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a> --}}
                            <a class="nav-link " aria-current="page" href="#"
                                onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
                            <form action="{{ route('logout') }}" class="logout" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item">
                                <span class="nav-link">{{ auth()->user()->name }}</span>
                            </li>
                        </div>
                    </div>
                @endauth
            </div>

        </nav>
        <div class="container">
            @yield('content') 
        </div>
        @auth
        <div class="bg-light">
            <div class="container ">
                <footer class="py-3 my-4">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                    </ul>
                    <p class="text-center text-muted">&copy; 2021</p>
                  </footer>
            </div>
        </div>
        @endauth
        
        
            
                
              
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
        
    </body>


</html>
