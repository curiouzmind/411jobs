<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ config('blog.title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('/plugins/owl.carousel/owl-carousel/owl.carousel.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    @yield('styles')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/font-awesome/css/font-awesome.css')}}">
  </head>
  <body class="body">
    <!-- facebook comment js -->
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <!-- fb comments ends -->
    <!-- page wrapper -->
    <div class="wrapper">
     @include('partials.header')

      <!-- contents -->
      <div class="content">
        <div class="container">
          <!-- navigation menu -->
          @yield('nav')
        
          <!--  main-content-->
          <div class="main-content">
            <div class="row p10-bttm m20-bttm">  
              @yield('sub-title')
      
            </div>
            <div class="row">
              <!-- Post-cards -->
              @yield('content')

            </div> <!-- row ends -->
          </div> <!-- main-content ends -->
        </div> <!-- container ends -->
        <!-- footer -->
        <footer>
         @include('includes.footer')
        </footer>
      </div>
      <!-- content ends -->
    </div>
    <!-- page wrapper ends -->

    <script src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>
    <script src ="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/owl.carousel/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('script')
  </body>
</html>
