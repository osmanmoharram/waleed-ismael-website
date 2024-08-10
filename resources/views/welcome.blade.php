<!doctype html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//unpkg.com/alpinejs" defer></script>

    @vite('resources/css/app.css')
</head>

<body class="font-kufi">
    <div class="hidden lg:block relative w-screen h-[880px] overflow-y-hidden">
        <video autoplay loop muted>
            <source src="{{ asset('videos/hero1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-gray-900/80"></div>
    </div>

    <nav x-data="{ open: false }" class="lg:hidden">
        <div class="flex justify-between items-center px-6 text-slate-800">
            <img class="w-24" src="{{ asset('images/eldafi3.png')}}" alt="Eldafi3">

            <button @click="open = true" x-show="! open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <button @click="open = false" x-show="open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <ul @click.away="open = false" class="w-full text-center space-y-6 py-6 bg-slate-50 text-slate-500" x-show="open">
            <li><a href="#" class="hover:text-slate-800"> ترجمة الشيخ </a></li>

            <li> <a href="#" class="hover:text-slate-800"> المناظرات </a></li>

            <li> <a href="#" class="hover:text-slate-800"> المشاريع </a></li>

            <li> <a href="#" class="hover:text-slate-800"> تواصل معنا </a></li>
        </ul>
    </nav>

    <nav class="hidden lg:block shadow-xl">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="#"> ترجمة الشيخ </a>

            <a href="#"> المناظرات </a>

            <img class="w-44" src="{{ asset('images/nav-image.png')}}" alt="Waleed Ismael">

            <a href="#"> المشاريع </a>

            <a href="#"> تواصل معنا </a>
        </div>
    </nav>
</body>

</html>
