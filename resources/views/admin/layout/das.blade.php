<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title></title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('sneat/assets')}}/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{asset('sneat/assets')}}/vendor/fonts/boxicons.css" />
  

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('sneat/assets')}}/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('sneat/assets')}}/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('sneat/assets')}}/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('sneat/assets')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="{{asset('sneat/assets')}}/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Dropify -->
  <link rel="stylesheet" href="{{asset('dropify/css')}}/dropify.css">
  <!-- Helpers -->
  <script src="{{asset('sneat/assets')}}/vendor/js/helpers.js"></script>
  <!-- Ckeditor -->
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('sneat/assets')}}/js/config.js"></script>
  <script src="https://kit.fontawesome.com/bb21b3c852.js" crossorigin="anonymous"></script>
  <link href="{{asset('css')}}/bootstrap.min.css" />
  <link href="{{asset('css/app.css')}}" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" />
  <link href="{{asset('css')}}/select2.min.css" rel="stylesheet" />
  <link href="{{asset('css')}}/app.css" />
  <!-- datetime picker datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" />

  
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      @include('admin.layout.das_sidebar')
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        @include('admin.layout.das_navbar')

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              {{-- <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
              </div>
              <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                  target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                  class="footer-link me-4">Support</a>
              </div> --}}
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{asset('sneat/assets')}}/vendor/libs/jquery/jquery.js"></script>
  <script src="{{asset('sneat/assets')}}/vendor/libs/popper/popper.js"></script>
  <script src="{{asset('sneat/assets')}}/vendor/js/bootstrap.js"></script>
  <script src="{{asset('sneat/assets')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{asset('sneat/assets')}}/vendor/js/menu.js"></script>
  <script src="{{asset('sneat/assets')}}/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="{{asset('sneat/assets')}}/js/main.js"></script>
  <script src="{{asset('sneat/assets')}}/js/dashboards-analytics.js"></script>
  <script src="{{asset('dropify/js')}}/dropify.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{asset('js/countdown/jquery.countdown.js')}}"></script>
  <script src="{{asset('js/app.js?v=').date("ymd",strtotime('none'))}}"></script>
  @yield("js")
</body>

</html>