<section class="px-5 xl:px-16 py-16 bg-utama-100" x-data="{ modal: false }">
    <div class="grid lg:grid-cols-2 mb-10">
        <x-heading prefix="Berita" suffix="Terbaru" />
        <p class="text-sm xl:text-base -mt-10 lg:mt-0">
            Sebuah inisiatif berani dan inovatif dikenal sebagai "Banyuwangi Hijau" telah mencapai kesuksesan besar
            dalam memperluas pelayanan sampah.
        </p>
    </div>

    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper mb-10">
            @foreach ($news as $item)
                @livewire('banyuwangi-hijau.card-news', ['item' => $item], key($item->id))
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination -bottom-10"></div>
    </div>
    <x-modal>
        @livewire('banyuwangi-hijau.modal')
    </x-modal>
</section>
