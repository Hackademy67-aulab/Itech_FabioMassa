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

    <div class="cursor"></div>
    <div class="pointer"></div>
    <section  style = " background: linear-gradient(180deg, rgba(22,22,22,1)30%, rgba(65,65,65,1) 90%);">
        <nav class="navbar navbar-expand-lg p-4 p-lg-5">
        <div class="container-fluid px-2 px-lg-5 ">
            <img src="/media/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-end">
                <li class="nav-item">
                <a class="nav-link active text-white link" aria-current="page" href="/" class="slide-in-left">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white link" href="#">Iscriviti</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white link" href="#">Contatti</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </section>

    <main class="fade-in-left">

    <div class="container-fluid" >
        <div class="row justify-content-evenly" style = "height : 80vh">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{$inserzione['img']}}" alt="">
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0  d-flex flex-column justify-content-center ">
                <h1 class="mb-4 mt-lg-0">{{$inserzione['titolo']}}</h1>
                <h3 class="fw-light h5">{{$inserzione['descrizione']}}</h2>
            </div>
        </div>
    </div>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>

const cursor = document.querySelector(".cursor")
const pointer = document.querySelector(".pointer")
const link = document.querySelectorAll("a");


document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.pageX + 'px';
    cursor.style.top = e.pageY + 'px';
    pointer.style.left = e.pageX + 'px';
    pointer.style.top = e.pageY + 'px';
})

link.forEach(link => {
    link.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
    })
    link.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
    })
});

</script>


</body>
</html>