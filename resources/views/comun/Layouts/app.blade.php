

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('asset/comun/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('asset/comun/responsive.css') }}" /> 

        @yield('css')
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>

<div id="wrapper">
<div id="wrapper2">
<!-- HEADER -->
@include('comun.includes.header')
@include('comun.includes.nav')
<!-- NAVIGATION -->
<div class="pseudoStickyBlock" style="position: relative; display: block; height: 0px;"></div>
<!-- MAIN CONTENT -->
<div id="main" role="main">
<div class="">
@yield('conten')
<!-- FOOTER -->
@include('comun.includes.footer')
</div><!-- / #wrapper2 -->
</div><!-- / #wrapper -->

<!-- Design by templatemonster.com -->


<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="WebPixelsManagerSandboxContainer"><iframe src="./Tools _ Tools_files/saved_resource.html" id="web-pixel-sandbox-CUSTOM-shopify-custom-pixel-LAX-1f402832w5a42f512p4c77d00dm4ddfef98" name="web-pixel-sandbox-CUSTOM-shopify-custom-pixel-LAX-1f402832w5a42f512p4c77d00dm4ddfef98" sandbox="allow-scripts allow-forms" tabindex="-1" aria-hidden="true" style="display:none; height:0; width:0; visibility: hidden;"></iframe></div>


<script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
</html>
