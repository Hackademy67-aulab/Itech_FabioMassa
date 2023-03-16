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

</x-layout>
