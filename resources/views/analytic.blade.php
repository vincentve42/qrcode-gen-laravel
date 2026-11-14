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
    <img id="preview" src="{{route('generateQr', ['slug' => $qr['url']])}}" alt="">
            <p class="text-center font-semibold">Total Klik : {{ $qr['click'] }}</p>
            
    
    </div>
    <div class="flex justify-self-center">
            <p class="text-center font-semibold">Token : &nbsp;</p><p id="token" class="text-center font-semibold"> {{ $qr['token'] }}</p> <p onclick="copyToken()" class="ml-2 font-semibold underline" for="">Copy</p>
            </div>
    <div class="justify-self-center">
        <button onclick="downloadImage()" class="font-semibold border-b text-xl">Download QR</button>
    </div>
    <x-create-qr></x-create-qr>
    <x-analyzeqr></x-analyzeqr>
</body>
<script>
    function downloadImage() {
    const img = document.getElementById("preview");

    const link = document.createElement("a");
    link.href = img.src;
    link.download = "image.png";

    link.click();
}
function copyToken()
{
   
    navigator.clipboard.writeText(document.getElementById('token').innerHTML);
}
</script>
</html>