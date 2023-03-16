<div class="inserzioni container-fluid d-flex justify-content-center mb-4 mb-lg-5 w-50 ">
    <a href="{{route('dettagli', ['id'=>$inserzione['id']])}}">
        <div class="row justify-content-center  inserzioni" style="border:1px solid black;" id="animationcard">
                <div class="col-12 col-lg-6  m-0 p-0 ">
                    <img src="{{$inserzione['img']}}" alt="regali tech" class="w-100  m-0 p-0  h-100 inserzioni">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center p-3 p-lg-5">
                    <h3 class="fw-bolder text-dark">{{$inserzione['titolo']}}</h3>
                    <p class="p-0 m-0 text-dark">{{$inserzione['descrizione']}}</p>
                </div>
        </div>
    </a>
</div>