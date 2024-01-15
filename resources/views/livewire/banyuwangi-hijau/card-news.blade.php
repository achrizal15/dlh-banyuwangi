<div class="swiper-slide rounded-md shadow-lg group relative overflow-hidden after:content-[''] after:absolute after:-bottom-20 after:left-0 after:right-0 after:h-20 after:z-0"
    style="">
    <img width="100%" height="150" class="w-full aspect-video h-auto object-cover"
        src="{{ $item->gambar == null ? Vite::asset('resources/images/bwh.webp') : $item->gambar }}"
        alt="{{ $item->judul }}">
    <div
        class="absolute z-10 bottom-0 left-0 right-0 px-5 group-hover:bg-gradient-to-t group-hover:from-utama-300
    group-hover:to-utama-300/80 backdrop-blur-sm max-h-max group-hover:max-h-full overflow-hidden group-hover:min-h-full min-h-0 transition-all text-utama-100 flex items-center flex-col justify-center py-2">
        <p x-on:click="modal=true" wire:click="setContent"
            class="xl:text-xl cursor-pointer text-lg text-center line-clamp-1 group-hover:line-clamp-2 font-medium">
            {{ $item->judul }}</p>
        <div class="hidden group-hover:flex justify-center">
            <p class="line-clamp-4 text-center text-sm font-thin">
                {!! strip_tags($item->deskripsi) !!}
            </p>
        </div>
    </div>
</div>
