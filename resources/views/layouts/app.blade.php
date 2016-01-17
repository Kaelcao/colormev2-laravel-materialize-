<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('public/css/materialize.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('public/css/common.css') }}"/>
    <script src="{{URL::asset('public/js/jquery-1.12.0.min.js')}}">
    </script>
</head>
<body>
@section('sidebar')
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" onclick="return false" class="brand-logo">colorME</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Test</a></li>

                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#">Test</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
@show
<main>
@yield('content')
</main>
@section('footer')
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
@show


<script src="{{URL::asset('public/js/materialize.min.js')}}">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });
</script>
</body>
</html>