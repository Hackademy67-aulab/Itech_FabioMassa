<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title}}</title>

    <link rel="shortcut icon" href="/media/logofavicon.png" type="image/x-icon">
    <!-- CSS BOOTSTRAP -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">

    {{-- AOS ANIMATION --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS INTERNO -->
    </head>
    <body>


        {{$slot}}

        {{-- JS AOS ANIMATION --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        {{-- JS INTERNO --}}


</body>
</html>
