<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ __('home.company') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/scrolling-nav.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">


</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ __('home.company') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">{{ __('home.menu.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">{{ __('home.menu.services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">{{ __('home.menu.contact') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white">
    <div class="container text-center">
        <h1>{{ __('home.welcome') }}</h1>
        <p class="lead">{{ __('home.slogan') }}</p>
    </div>
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>{{ __('home.about.title') }}</h2>
                <p class="lead">{{ __('home.about.intro') }}</p>
                <ul>
                    <li>We do this</li>
                    <li>3h simple wordpress sites we charge u a few K</li>
                    <li>We do that</li>
                    <li>Laravel solutions with premade libraries - pretttty neat</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="services" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>{{ __('home.services.title') }}</h2>
                <p class="lead">{{ __('home.services.intro') }}</p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>{{ __('home.contact.title') }}</h2>
                <p class="lead">{{ __('home.contact.intro') }}</p>
                <form id="inquiry-form" method="post" action="/submit">
                    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                    <input type="text" name="name">

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; {{ __('home.company') }} 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('/assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom JavaScript for this theme -->
<script src="{{ asset('/assets/js/scrolling-nav.js')}}"></script>
<script src="{{ asset('/assets/js/script.js')}}"></script>

</body>

</html>
