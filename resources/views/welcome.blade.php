<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative w-screen h-screen overflow-y-hidden">
        <video autoplay loop muted>
            <source src="{{ asset('videos/hero1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-gray-900/80"></div>

    </div>

    <nav class="relative flex items-center justify-center py-14 shadow-xl">
        <div>
            dsfsdfdsf

        </div>
        <img class="w-36 absolute" src="{{ asset('images/nav-image.png')}}" alt="Waleed Ismael">
        <div>

        </div>
    </nav>
</body>

</html>
