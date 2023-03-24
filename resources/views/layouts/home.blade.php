
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->

    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />

    <meta name="author" content="Zeynep Sengul" />
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" type="">
    <title>@yield('title')</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet" />

    @yield('css')
    @yield('headerjs')
</head>

<body>

@include('home._header')
@include('home._slider')
@include('home._whysection')
@include('home._arrival')
@section('content')
    @show


@include('home._subscribe')
@include('home._clientsection')


@include('home._footer')
@yield('footerjs')








</body>
</html>

