<x-layout>

    <x-slot name="title">{{$inserzione['titolo']}}</x-slot>

    <div class="cursor"></div>
    <div class="pointer"></div>

    <section  style = " background: linear-gradient(180deg, rgba(22,22,22,1)30%, rgba(65,65,65,1) 90%);">
        <x-navbar/>
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

</x-layout>
