<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Block Tech</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- CSS INTERNO -->
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

    <section class = "sfondo">

        <nav class="navbar navbar-expand-lg p-4 p-lg-5">
        <div class="container-fluid px-2 px-lg-5 ">
            <img src="/media/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-end">
                <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Iscriviti</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Contatti</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="container-fluid">
            <div class="row justify-content-evenly align-items-center header">
                <div class="col-12 col-lg-6 d-flex align-items-center drone" style=height:80%>
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center text-center titoli">
                        <h1 class="display-2 fw-bold text-white">SCOPRI <br>BLOGTECH</h1>
                        <h2 class="fw-light  text-white">In questo sito potete trovare blog con informazioni <br>relative alla tecnologia</h2>
                </div>
            </div>
        </div>

    </section>

    <section class=" d-flex align-items-center justify-content-evenly py-5  p-lg-0 tuttipost" style = "height:15vh; align-content:center">
        <p class=" m-0 p-0">Tutti i post</p>
        <div>
            <button style="background-color: white; border: 0px;" class="me-lg-5 "><img src="/media/search.png" alt="" style="height: 15px;"></button>
            <a id="iscrizione" href="" type="submit" style="border: 1px solid rgb(37, 37, 37); border-radius: 3px; text-decoration: none; color:black" class="p-2 py-lg-3 px-lg-4">Accetta / Iscriviti</a>
        </div>
    </section>



    @foreach ($inserzioni as $inserzione)
    <a href="{{route('dettagli', ['id'=>$inserzione['id']])}}">
        <div class="container-fluid d-flex justify-content-center mb-4 mb-lg-5 w-50">
            <div class="row justify-content-center  inserzioni" style="border:1px solid black;">
                    <div class="col-12 col-lg-6  m-0 p-0 ">
                        <img src="{{$inserzione['img']}}" alt="regali tech" class="w-100  m-0 p-0  h-100 inserzioni">
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center p-3 p-lg-5">
                        <h3 class="fw-bolder text-dark">{{$inserzione['titolo']}}</h3>
                        <p class="p-0 m-0 text-dark">{{$inserzione['descrizione']}}</p>
                    </div>
            </div>
            </div>
    </a>
    @endforeach









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="/js/main.js"></script>

</body>
</html>