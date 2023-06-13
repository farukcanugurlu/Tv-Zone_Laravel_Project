<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Tv Zone</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css" media="all">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <title>Div in table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.min.css" />

    <link href="{{asset('assets')}}/css/element.css" rel="stylesheet">

    <script type="text/javascript"  src="{{asset('assets')}}/js/jquery-2.1.1.min.js"></script>
    <script  type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>

</head>
@include('home._header')
@include('home._center')

@yield('content')

@include('home._footer')


<body>
</body>
</html>
