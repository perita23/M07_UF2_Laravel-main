<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                <a class="navbar-brand" href="#">StuFilms</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/oldFilms>Pelis antiguas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/newFilms>Pelis nuevas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/filmsByYear>Pelis por año</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/filmsByGenre>Pelis por genero</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/filmsSorted>Pelis ordenadas por año</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=/filmout/countFilms>Contar numero de peliculas</a>
                        </li>
                    </ul>
                </div>
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