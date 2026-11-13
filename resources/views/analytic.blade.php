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

    <img src="{{  }}" alt="">

    <x-create-qr></x-create-qr>
    <x-analyzeqr></x-analyzeqr>
</body>
</html>