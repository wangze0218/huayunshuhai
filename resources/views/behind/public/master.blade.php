<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>
    @include('behind.public.style')

    <script src="{{asset('FlatLab/js/html5shiv.js')}}"></script>
    <script src="{{asset('FlatLab/js/respond.min.js')}}"></script>
</head>

<body>


<section id="container" >

    @include('behind.public.header')

    @include('behind.public.aside')

    <section id="main-content">

        <section class="wrapper site-min-height">

            @yield('content')

        </section>

    </section>

    @include('behind.public.footer')

</section>


@include('behind.public.script')

<script>
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
