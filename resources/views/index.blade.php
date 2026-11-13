<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body x-data="{createqr: false}">
   <x-navbar></x-navbar>
    <h1 class="text-center text-3xl font-semibold pt-10">Buat QR Code Gratis dalam Hitungan Detik</h1>
    <div class="justify-self-center pt-10">
        <p class="text-xl sm:w-256 pl-2 pr-2 sm:pl-0 sm:pr-0 pb-5 sm:text-start text-center">Ubah link, teks, dan informasi lainnya menjadi QR Code dengan mudah, cepat, dan gratis. Tanpa ribet, tanpa biaya tersembunyi. Cukup masukkan konten, buat QR Code, lalu unduh dan bagikan!</p>
        <p @click="createqr = !createqr" href="" class="text-blue-800 underline font-semibold text-xl sm:pl-0 pl-5">Buat QR Code sekarang — Gratis selamanya.</p>
    </div>
    <x-create-qr></x-create-qr>
</body>
</html>