<footer class="bg-utama-400 p-8 px-5 xl:px-16 ">
    <section class="flex justify-between flex-wrap mb-10 gap-10">
        <div class="w-full lg:w-auto">
            <a href="/" class="flex items-center gap-3 focus:outline-none">
                <img src="{{ Vite::asset('resources/images/dlh-1.webp') }}" alt="dlh-logo" width="60" height="60"
                    class="h-auto w-14">
                <article class="flex flex-col justify-center">
                    <p class="text-utama-300 text-base font-semibold leading-5">DINAS LINGKUNGAN HIDUP</p>
                    <p class="text-utama-100 text-sm font-semibold leading-3">BANYUWANGI</p>
                </article>
            </a>
            <div class="text-utama-100 text-sm xl:text-base mt-4">
                <p>Jl. Wijaya Kusuma No. 102 - Banyuwangi, 68425</p>
                <a href="tel:(0333)424113">(0333) 424113</a> <br>
                <a href="mailto:dlh.banyuwangi@gmail.com">dlh.banyuwangi@gmail.com</a>
            </div>
        </div>
        <div class="flex gap-10 w-full md:w-auto">
            <div>
                <h3 class="text-utama-300 font-semibold">INFORMASI</h3>
                <ul class="text-utama-100 text-xs xl:text-sm mt-5 flex flex-col gap-3 uppercase">
                    @foreach ($categories as $item)
                        <li>
                            <a href="{{ route('ir.index') }}?kategori={{ $item->id }}">{{ $item->nama }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div>
                <h3 class="text-utama-300 font-semibold">LAINYA</h3>
                <ul class="text-utama-100 text-xs xl:text-sm mt-5 flex flex-col gap-3">
                    <li>
                        <a href="{{ route('artikel.index') }}">ARTIKEL</a>
                    </li>

                </ul>
            </div>
        </div>
        <div>
            <h3 class="text-utama-300 font-semibold">SOSIAL MEDIA</h3>
            <div class="flex items-center justify-start gap-3 mt-5">
                <a class="text-xl text-utama-100" href="https://www.facebook.com/banyuwangi.hijau" target="_blank"
                    rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="text-xl text-utama-100" href="https://www.instagram.com/banyuwangi.hijau/" target="_blank"
                    rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                <a class="text-xl text-utama-100" href="https://www.tiktok.com/@banyuwangi.hijau?_t=8ipLhlX5doI&_r=1"
                    target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
                <a class="text-xl text-utama-100" href="https://www.youtube.com/@banyuwangihijau" target="_blank"
                    rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </section>
    <section class="text-utama-100 text-sm xl:text-base">
        Copyrights © 2023
    </section>

</footer>
