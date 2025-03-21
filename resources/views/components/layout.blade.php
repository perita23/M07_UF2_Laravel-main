<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/@webpixels/css@1.2.6/dist/index.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header style="height: fit-content;" class="border-bottom border-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="{{asset("images/logo (2).png")}}" alt="Logo del cine" style="height: 5vh">
                <a class="navbar-brand" href="/">StuFilms</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('oldFilms')}}">Pelis antiguas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('newFilms')}}">Pelis nuevas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('filmsByYear')}}">Pelis por año</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('filmsBygenre')}}">Pelis por genero</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('filmsSorted')}}">Pelis ordenadas por año</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('countFilms')}}">Contar numero de peliculas</a>
                        </li>
                        
                        <div class="dropdown nav-item">
                            <a class="nav-link dropdown-toggle bg-dark text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Actores
                            </a>
                            <ul class="dropdown-menu nav-item text-white" aria-labelledby="dropdownMenuLink"
                                style="backdrop-filter: blur(10px); background-color: rgba(0, 0, 0, 0.5);">
                                <li><a class="dropdown-item text-white" href="{{route('countActors')}}">Contar actores</a></li>
                                <li><a class="dropdown-item text-white" href="{{route('listActor')}}">Ver actores</a></li>
                            </ul>
                        </div>


                    </ul>
                </div>

            </div>
            <div>
                <a class="text-light btn btn-primary btn-sm" style="height: 100%; width: 100%;"
                    href="{{route('addFilmForm')}}">
                    Añade una pelicula
                </a>
            </div>
        </nav>

    </header>

    <section class="bg-dark text-white" style="min-height: 75vh">
        {{$slot}}
    </section>
    <footer style="height: 15vh" class="border-top border-white">
        <div class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>About Us</h5>
                        <p>We provide the latest information and reviews on films. Stay tuned for more updates.</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li>Email: info@filmsite.com</li>
                            <li>Phone: +123 456 7890</li>
                            <li>Address: 123 Film Street, Movie City</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>&copy; 2023 FilmSite. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>