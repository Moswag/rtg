    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>
            RTG
        </title>
        <!-- Favicon -->
        <link href="assets/img/logo.png" rel="icon" type="image/png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Icons -->
        <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
        <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
    </head>

    <body class="bg-default">
        <div class="main-content">
            <!-- Navbar -->
            <br><br><br><br><br>
            <br><br><br>
            <!-- Header -->

            <!-- Page content -->
            <div class="container mt--8 pb-8">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card bg-secondary shadow border-0">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <img src="assets/img/logo.png" alt="rtg">
                                </div>
                                <br>
                                @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
                @elseif(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                                <form role="form" method="POST" action="signin">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input name="email" class="form-control" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i
                                                    ></span>
                                            </div>
                                            <input name="password" class="form-control" placeholder="Password" type="password" required />
                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox" />
                                        <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Remember me</span>
                                            </label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary my-4" value="Sign in"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="#" class="text-light"><small>Forgot password?</small></a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="text-light"><small>Create new account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!--   Core   -->
            <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
            <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!--   Optional JS   -->
            <!--   Argon JS   -->
            <script src="assets/js/argon-dashboard.min.js?v=1.1.0"></script>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
            <script>
                window.TrackJS &&
                    TrackJS.install({
                        token: 'ee6fab19c5a04ac1a32a645abde4613a',
                        application: 'argon-dashboard-free',
                    });
            </script>
        </body>
    </html>
