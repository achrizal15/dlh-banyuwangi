<section class="p-16 px-0 xl:px-16">
    <article class="bg-utama-100 py-10 rounded-md px-5 xl:px-0">
        <x-heading prefix="Hubungi" align="center" suffix="Kami" />
        <div class="-mt-10 flex justify-center">
            <p class="text-sm xl:text-base text-center w-full xl:max-w-4xl">
                Jadilah bagian dari perubahan positif! Dukung keberlanjutan dengan bergabung di Program Banyuwangi
                Hijau. Temukan cara Anda berkontribusi untuk lingkungan dan ekonomi lokal. Ayo bersama wujudkan
                Banyuwangi yang lebih hijau! <span class="text-utama-300">#BanyuwangiHijau #AksiUntukBumi</span>
            </p>
        </div>
        <div class="flex items-center justify-center gap-3 mt-5">
            <a class="text-xl text-hitam" href="https://www.facebook.com/banyuwangi.hijau" target="_blank"
                rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="text-xl text-hitam" href="https://www.instagram.com/banyuwangi.hijau/" target="_blank"
                rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
            <a class="text-xl text-hitam" href="https://www.tiktok.com/@banyuwangi.hijau?_t=8ipLhlX5doI&_r=1"
                target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <div class="flex justify-center items-center mt-5">
            <div class="relative" x-data="{ open: false }">
                <button x-on:click="open=true"
                    class="text-center bg-utama-300 text-white hover:text-utama-100 hover:bg-utama-400 transition px-5 rounded-full py-3 text-sm lg:text-base font-medium">Hubungi
                    Kami</button>
                <div x-show="open" x-on:click.outside="open=false"
                    class="absolute right-1/2 -bottom-24 lg:-bottom-28 text-utama-100 shadow-lg p-5 rounded-lg transform translate-x-[50%] min-w-max bg-utama-300 group backdrop-blur-sm">
                    <div class="relative">
                        <i
                            class="fa-solid fa-caret-up absolute -top-7 left-1/2 transform translate-x-0 text-utama-300"></i>
                    </div>
                    <ul class="flex flex-col gap-3">
                        <li class="hover:text-utama-400 text-xs lg:text-base">
                            <a href="https://api.whatsapp.com/send?phone=6282130308585&text=Halo, saya membutuhkan informasi program banyuwangi hijau"
                                target="_blank" rel="noopener noreferrer">Informasi Program Banyuwangi Hijau</a>
                        </li>
                        <li class="hover:text-utama-400 text-xs lg:text-base">
                            <a href="https://api.whatsapp.com/send?phone=6282221083332&text=Halo, saya membutuhkan Informasi dan Aduan Layanan TPS Balak"
                                target="_blank" rel="noopener noreferrer">Informasi dan Aduan Layanan TPS Balak</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </article>
</section>
