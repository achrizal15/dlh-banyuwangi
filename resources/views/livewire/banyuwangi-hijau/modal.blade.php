<article x-on:click.outside="modal=false"
    class="w-full mt-10 md:w-[700px] overflow-hidden lg:w-[800px] bg-utama-100 rounded-md min-h-[300px] px-5 py-5 relative">
    <div class="flex items-start gap-2">
        <div class="relative">
            <h3 class="lg:text-xl text-lg font-semibold text-hitam">
                {{ $news?->judul }}
            </h3>
            <img width="100%" height="60" class="h-auto w-[4rem] absolute left-0 -top-5"
                src="{{ Vite::asset('resources/images/gajah-oling.webp') }}" alt="gajah oling">
        </div>
        <button x-on:click="modal=false" aria-label="close modal" class="bg-red-800 p-1  rounded-full hover:bg-red-900">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" class="w-3 h-3" viewBox="0 0 21 21"
                fill="none">
                <path d="M15.5 5.5L5.5 15.5" stroke="#EAF0EC" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M5.5 5.5L15.5 15.5" stroke="#EAF0EC" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    {!! $shareButtons !!}
    <div class="max-h-[200px] xl:max-h-[300px] overflow-y-auto mb-5 max-w-none text-xs xl:text-sm prose prose-sm">
        {!! $news?->deskripsi !!}
    </div>
</article>
