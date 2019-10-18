
    <html lang="en">

        <head>
          @include('partials.header')
        </head>

        <body class="">
          <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
            <div class="container-fluid">
              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Brand -->
              <a class="navbar-brand pt-0">
                <img src="{{URL::to('assets/img/logo.png')}}" class="navbar-brand-img" alt="...">
              </a>
              <!-- User -->
             @include('partials.navbar')
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                @include('partials.sidebar')
              </div>
            </div>
          </nav>
          <div class="main-content">
            <!-- Navbar -->
            @include('partials.navbar_real')
            <!-- End Navbar -->
            <!-- Header -->
            @yield('content')
            @include('partials.footer')
          </div>
          <!--   Core   -->
          <script src="{{ URL::to('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
          <script src="{{ URL::to('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
          <!--   Optional JS   -->
          <script src="{{ URL::to('assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
          <script src="{{ URL::to('assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
          <!--   Argon JS   -->
          <script src="{{ URL::to('assets/js/argon-dashboard.min.js?v=1.1.0') }}"></script>
          <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
          <script>
            window.TrackJS &&
              TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
              });
          </script>
        </body>

        </html>
