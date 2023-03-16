<x-layout>

    <x-slot name="title">Welcome Page</x-slot>

    <div class="cursor"></div>
    <div class="pointer"></div>

    @if (session('message'))
        <div class="alertt fade show d-flex justify-content-evenly align-items-center slide-in-top text-center" role="alert" id="mess">
            <strong class="text-white">{{ session('message') }}</strong>
        </div>
    @endif

    <section class = "sfondo">

        <x-navbar/>

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
        <x-card
            :inserzione="$inserzione"
        />
    @endforeach











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

 </x-layout>
