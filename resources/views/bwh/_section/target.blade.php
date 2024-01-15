<section class="px-5 xl:px-16 py-16">
    <x-heading prefix="Tujuan" align="center" suffix="Banyuwangi Hijau" />
    <div class="-mt-10 flex justify-center">
        <p class="text-sm xl:text-base text-center w-full xl:max-w-4xl">
            {!! strip_tags($deskripsi_tujuan) !!}
        </p>
    </div>
    <div class="flex flex-wrap gap-12 justify-center mt-10">
        @foreach ($list_tujuan as $item)
            <div
                class="xl:w-[calc(34%-3rem)] md:w-[calc(50%-3rem)] min-h-[200px] text-center bg-utama-300 relative text-utama-100 rounded-md p-5 flex items-center text-sm lg:text-base">
                <img src="{{ Vite::asset('resources/images/gajah-oling.webp') }}" alt="gj oling"
                    class="absolute left-5 bottom-5 -translate-y-[50%] transform">
                {{ $item }}
            </div>
        @endforeach
    </div>
</section>
