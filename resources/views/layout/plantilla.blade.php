<!doctype html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark mt-3" style="background-color: red">
                    <a class="navbar-brand" href="/index"><img class="ml-5" src="https://logos-marcas.com/wp-content/uploads/2020/11/Nintendo-Logo.png" alt="" width="150xp" height="80xp"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/nintendo/historia">Historia<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/nintendo/juegos">Juegos Populares</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/nintendo/consolas">Consolas</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/nintendo/noticias">Noticias</a>
                            </li>
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="/nintendo/mario">Mario Bros</a>
                            </li>
                            <li>
                                <img class="ml-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Mario_Series_Logo.svg/800px-Mario_Series_Logo.svg.png" alt="" width="150xp" height="80xp">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    @yield('contenido')
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-4" style="background-color: #727A79;">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col ">
                <img class="mt-5 mb-5 ml-5" src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="https://fotos-themonkeybusiness.s3.eu-west-3.amazonaws.com/wp-content/uploads/2021/03/06021844/icono-instagram-png-transparente.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="https://cdn.icon-icons.com/icons2/195/PNG/256/YouTube_23392.png" alt="" width="50xp" height="50xp">
                <img class="mt-5 mb-5" src="https://www.esrb.org/wp-content/themes/esrb/assets/images/seals/privacy-certified-global-seal.svg" alt="" width="50xp" height="80xp">
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center text-white">2021 Nintendo. Los juegos son propiedad de sus respectivos dueños.</p>
                <p class="text-center text-white">la sede central de Nintendo of America Inc. | La sede se encuentra en Redmond, Washinton. | Asistencia</p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>