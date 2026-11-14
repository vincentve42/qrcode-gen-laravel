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
<body x-data="{createqr: false, analyze : false}">
   <x-navbar></x-navbar>
    <div class="justify-self-center pt-5">
       <h1 class="text-center text-2xl font-semibold">URL</h1>
        <h1 class="text-center text-2xl font-semibold">{{ $qr['redirect'] }}</h1>
    <img src="{{route('generateQr', ['slug' => $qr['url']])}}" alt="">

    
    </div>
    <x-create-qr></x-create-qr>
    <x-analyzeqr></x-analyzeqr>
</body>
</html>