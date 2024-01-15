<section class="px-5 xl:px-16 py-16 ">
    <x-heading prefix="Tentang" suffix="Kami" align="center" />
    <div class="flex items-center justify-center flex-col gap-5" x-data="{ read_all: false }">
        <div class="w-full xl:w-[700px] h-[200px] md:h-[400px]">
            <iframe width="100%" height="100%" class="rounded-md w-full"
                src="https://www.youtube.com/embed/JKOU6ddb4w4?si=E3eS0mVspgmAHeFk&amp;start=6"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <article class="w-full xl:w-[700px]">
            <p class="text-justify indent-8 line-clamp-5 text-sm lg:text-base" :class="{ 'line-clamp-5': !read_all }">
                {!! strip_tags($deskripsi_tentang) !!}
            </p>
        </article>
        <button x-on:click="read_all=!read_all" x-text="read_all ? 'Tutup' : 'Baca Lebih Lanjut'"
            class="text-center bg-utama-300 text-white hover:text-utama-100 hover:bg-utama-400 transition px-5 rounded-full py-3 text-sm lg:text-base font-medium">Baca
            Lebih Lanjut</button>
    </div>
</section>
