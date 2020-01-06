<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light ipr-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('logo.png')}}" width="98px" height="48px" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <form action="{{route('property.list')}}" class="form-inline">
                        <div class="input-group ml-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" name="q" class="form-control" placeholder="Cari Properti.." @if(\Request::get('q') != '') value="{!! Request::get('q') !!}" @endif aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group ml-2">
                            <select name="loc" class="form-control hide-md">
                                <option value="" disabled selected>-- Pilih Lokasi --</option>
                                @foreach ($locations as $item)
                                    <option value="{{$item->slug}}"  @if(\Request::get('loc') != '') @if(\Request::get('loc') == $item->slug) selected @endif @endif>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ml-2">
                            <select name="cat" class="form-control hide-md">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->slug}}" @if(\Request::get('cat') != '') @if(\Request::get('cat') == $item->slug) selected @endif @endif>{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ml-2">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown nav-item">
                            <a href="javascript:;" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Kategori</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $item)
                                <li class="px-2">
                                    <a href="{{route('property.list', $item->slug)}}" class="nav-link">{{$item->nama}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:;" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Lokasi</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach ($locations as $item)
                                <li class="px-2">
                                    <a href="{{route('property.list', $item->slug)}}" class="nav-link">{{$item->nama}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('article.list')}}">{{ __('Artikel') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="gradient-line"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <div class="img-container">
                            <img src="{{asset('logo.png')}}" width="123px" height="60px" alt="Logo">
                        </div>
                        <p class="mt-2">Indonesia Property Syariah hadir untuk memenuhi kebutuhan akan rumah dengan skema kepemilikan yang tidak melanggar syariat islam.</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h2>Kontak Kami</h2>
                        <ul>
                            <li><span class="fa fa-phone mr-1"></span> 0813-1551-1500</li>
                            <li><span class="fa fa-envelope mr-1"></span> info@iprosyar.com</li>
                            <li><span class="fa fa-map-marker mr-2"></span> Panorama Serpong, Jl. Puspitek Tangerang Selatan 15315</li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h2>Sosial Media</h2>
                        <ul>
                            <li>IG : indopropertysyariah</li>
                            <li>FB : facebook.com/iprosyar</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright &copy; - Indonesia Property Syariah 2019</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
    </script>
</body>
</html>
