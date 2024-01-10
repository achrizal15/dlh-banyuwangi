<!-- // https://boxicons.com/ -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
            <img src="{{asset('vendor')}}/PNG/LOGO DLH.png" class="img-fluid animated logo me-auto" width="50" height="50">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">DLH</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{route('dashboard.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- dinas lingkungan hidup -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">dinas Lingkungan Hidup</span>
        </li>

        <!-- admin -->
        <li class="menu-item">
            <a href="{{route('users.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Pengguna</div>
            </a>
        </li>
        <!-- agenda -->
        <li class="menu-item">
            <a href="{{route('agendas.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Basic">Agenda</div>
            </a>
        </li>
        <!-- articel -->
        <li class="menu-item">
            <a href="{{route('articles.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Basic">Article</div>
            </a>
        </li>
        <!-- galery -->
        <li class="menu-item">
            <a href="{{route('galerys.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Galery</div>
            </a>
        </li>
        <!-- kategori -->
        <li class="menu-item">
            <a href="{{route('categories.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Basic">Category</div>
            </a>
        </li>
        <!-- dokumen -->
        <li class="menu-item">
            <a href="{{route('documents.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Basic">Document</div>
            </a>
        </li>
        <!-- banner -->
        <li class="menu-item">
            <a href="{{route('banners.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Basic">Banner</div>
            </a>
        </li>
        <!-- mitra -->
        <li class="menu-item">
            <a href="{{route('mitraDLHs.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-street-view"></i>
                <div data-i18n="Basic">Mitra DLH</div>
            </a>
        </li>
       

        <!-- Banyuwangi Hijau -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Banyuwangi Hijau</span>
        </li>
 <!-- cerita sukses -->
 <li class="menu-item">
    <a href="{{route('cerita-suksess.index')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-history"></i>
        <div data-i18n="Basic">Cerita Sukses</div>
    </a>
</li>
        <!-- Static Page -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Static Page</span>
        </li>
        <!-- home page-->
        <li class="menu-item">
            <a href="{{route('home-page.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home Page</div>
            </a>
        </li>
        
        <!-- Banyuwangi Hijau-->
        <li class="menu-item">
            <a href="{{route('banyuwangi-hijau.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spa"></i>
                <div data-i18n="Analytics">Banyuwangi Hijau</div>
            </a>
        </li>
        
        <!-- Tentang Kami-->
        <li class="menu-item">
            <a href="{{route('tentang-kami.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Analytics">Tentang Kami</div>
            </a>
        </li>

        <!-- Operational Persampahan-->
        <li class="menu-item">
            <a href="{{route('operasional-persampahan.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-person-digging"></i>
                <div data-i18n="Analytics">Operational Persampahan</div>
            </a>
        </li>

        <!-- Komunikasi Perubahan Perilaku-->
        <li class="menu-item">
            <a href="{{route('komunikasi-perubahan-perilaku.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-bullhorn"></i>
                <div data-i18n="Analytics">Komunikasi Perubahan Perilaku</div>
            </a>
        </li>

        <!-- Tata Kelola dan Kelembagaan-->
        <li class="menu-item">
            <a href="{{route('tata-kelola-dan-kelembagaan.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-industry"></i>
                <div data-i18n="Analytics">Tata Kelola dan Kelembagaan</div>
            </a>
        </li>

        <!-- Inovasi Pendanaan-->
        <li class="menu-item">
            <a href="{{route('inovasi-pendanaan.edit')}}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-money-bill-trend-up"></i>
                <div data-i18n="Analytics">Inovasi Pendanaan</div>
            </a>
        </li>



    </ul>
</aside>