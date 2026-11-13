<div class="fixed top-25 left-1/2 -translate-x-1/2
            bg-white/30 backdrop-blur-lg
            sm:w-256 sm:h-64 w-90 h-64  pl-2 pr-2 rounded-2xl
            border border-white/20 shadow-lg" x-show="createqr" x-transition>
    <form action="/create-qr" method="post">
        @csrf
        <nav class="flex justify-between items-center justify-items-center ">
            <h1 class="text-2xl p-3 font-semibold">Buat Qr</h1>
            <svg @click="createqr = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-red-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </nav>
        <input type="text" placeholder="Masukan Url" class="sm:w-128 w-72  ml-3 mr-3 focus:outline-0 border-b mt-3" name="slug">
         @if ($errors->any())
                <div class="alert alert-danger pl-3 pt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-xs text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="pl-3 pt-5">
           
        <button class="font-semibold underline">Generate</button>
        </div>
    </form>
</div>
{{-- x-show="createqr" --}}