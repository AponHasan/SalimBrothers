<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="{{ asset('logo.jpg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.14/sweetalert2.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="printp">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    @guest
                    <a href=""></a>
                    @else
                    <a class="btn btn-primary" style="margin-left: 5px;" href="{{ url('/') }}">INVOICE</a>
                    <a class="btn btn-primary" style="margin-left: 5px;" href="{{ url('packinglist') }}">PACKING LIST</a>
                    <a href="/port"class="btn btn-primary" style="margin-left: 5px;" >PORT LIST</a>
                    <a class="btn btn-primary" style="margin-left: 5px;" href="/index">REPORT</a>
                    @endguest
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-2" style="margin-top: 30px">
                    <img src="{{asset('logo.jpg')}}" class="img-responsive" style="width:100%" alt="Image">                 
                </div>
                <div class="col-sm-10">      <!-- 
                    <img src="{{asset('cl.png')}}" class="img-responsive" style="width:90%" alt="Image"> -->
                    <h1 style="font-weight: bolder;font-size:40px;font-family:Impact, Charcoal, sans-serif;color: #313171;margin-bottom: 0px;height: 40px;">（有）セリームブラザーズインタナョナル</h1>
                    <h1 style="color:rgb(154, 5, 5);font-weight: bold;font-size:53px;padding-left: 15px;font-family:sans-serif;height: 50px;margin-top: 0px;">SALIM BROTHERS INT'L. LTD</h1>
                    <p style="padding-left: 15px;font-weight: bold;font-family: initial;font-size: 20px;">Midori Cho-2-1-18 Tatebayashi City, Gunma Ken-T 374-0025 Japan. Tel : 0276-73-8016 <br> Fax : 0276-73-8012, 374-0025 群馬県館林市緑町 2-1-18, 3F <br>E-mail :salimbro@luck.ocn.ne.jp, Web : http:www.salimbros.com</p>
                    <!-- <img src="{{asset('address.jpg')}}" class="img-responsive" style="width:88%;" alt="Image">     -->
                </div>
            </div>
            <br>
        </div>
        <div class="hr">
        </div>

        <main class="py-4">
            @yield('content')
        </main>
        @guest
            <a href=""></a>
        @else
            {{--<div class="printb" align="Right" style="margin-right: 80px;">--}}
                {{--<button style="font-weight: bold;" onclick="myFunction()" id="pbtn" class="btn btn-warning">Print</button>--}}
            {{--</div>--}}
        @endguest
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @yield('script')
    </div>

    
</div>
</body>
<script>
function myFunction() {
    window.print();
}
</script>
</html>
