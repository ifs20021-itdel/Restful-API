<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .logonih p {
            font-size: 24px;
        }
    </style>

</head>

<body class="bg-theme-4 flex opacity-100">
     <div class="sidenav w-2/12 text-white  border-r bg-gradient-to-b from-bluedesign to-skydesign h-screen sticky top-0" style="background-color: #94d2bd;">
        <div class="p-3 text-center">
            <div class="pb-2" style="margin-left: 50px;">
                <img src="https://cdn-icons-png.flaticon.com/512/1250/1250689.png" class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <p class=" font-bold" style="font-size: 13px;">Welcome</p>
            @include('components.sidenav')
        </div>
    </div>
    <div class=" justify-end grow shadow w-8/12">
        <header class="justify-between flex flex-grow border-b bg-white p-3 ">
            <div class="text-black logonih">
                <a href="/profil" style="text-decoration: none; color:black;">

                    <p class="m-0 text-3xl font-bold">Book List</p>
                </a>
            </div>
            <div class="flex">
                <div class="items-center flex gap-3">
                </div>
                <div class="items-center flex ml-1">
                    @include('components.avatar')
                </div>
                <i class="bi bi-person-circle p-2 text-white"></i>
            </div>
        </header>
        <main class=" p-3">
            <div>

                <hr class="mt-0 text-white">
                <!-- <nav class="flex p-0 w-fit rounded-lg">
                    <a href="/biodata" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white rounded-l-lg font-bold">Biodata</a>
                    <a href="/evaluasi-kerja/pendidikan" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white font-bold">Pelaksanaan Pendidikan</a>
                    <a href="/evaluasi-kerja/penelitian" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white font-bold">Pelaksanaan Penelitian</a>
                    <a href="/evaluasi-kerja/pengabdian" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white font-bold">Pelaksanaan Pengabdian</a>
                    <a href="/evaluasi-kerja/penunjang" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white font-bold">Pelaksanaan Penunjang</a>
                    <a href="/simpulan" class="bg-whitety p-3 hover:bg-bluedesign hover:text-white rounded-r-lg font-bold">Simpulan</a>
                </nav> -->
                <div class="konten mt-4">



                </div>
            </div>
        </main>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
