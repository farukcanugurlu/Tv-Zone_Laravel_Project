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

   <style>
       .product-reviews {
           margin-top: 30px;
       }

       .product-reviews h4 {
           font-size: 18px;
           font-weight: bold;
           margin-bottom: 10px;
       }

       .single-review {
           margin-bottom: 20px;
           border: 1px solid #e6e6e6;
           padding: 10px;
       }

       .review-heading {
           display: flex;
           justify-content: space-between;
           margin-bottom: 10px;
       }

       .review-heading .user-info a {
           color: #333;
           text-decoration: none;
       }

       .review-heading .user-info i {
           margin-right: 5px;
       }

       .review-heading .review-date a {
           color: #888;
           text-decoration: none;
       }

       .review-heading .review-date i {
           margin-right: 5px;
       }

       .review-body p {
           color: #555;
           margin-bottom: 0;
       }
   </style>


</head>
@include('home._header')


@include('home._top')
@include('home._center')
@include('blog.center1')


@include('home._footer')

<script type="text/javascript">
    $(function(){

        $('#show').on('click',function(){
            $('.card-reveal').slideToggle('slow');
        });

        $('.card-reveal .close').on('click',function(){
            $('.card-reveal').slideToggle('slow');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('[id^=detail-]').hide();
        $('.toggle').click(function() {
            $input = $( this );
            $target = $('#'+$input.attr('data-toggle'));
            $target.slideToggle();
        });
    });
</script>
<body>
</body>
</html>
