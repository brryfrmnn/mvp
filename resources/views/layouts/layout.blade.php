<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> <!-- meta itu identitas dari sebuah html, charset itu format penulisan text, utf-8 (ngasih tau ke browser)-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--ngasih tau compatibility dari user agen kalo ie ga support -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive layar, -->
    <meta name="description" content=""><!-- ini digunakan untuk Search Engine Optimizer, deskripsi tentang website, kemudahan di index oleh google -->
    <meta name="keywords" content=""><!-- sama penggunaannya dengan description-->
    <meta name="author" content="">
    

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
	  <link rel="icon" type="image/png" href="images/mvp.png">
    <link href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <link href="assets/colorbox/example4/colorbox.css" rel="stylesheet">
    <link href="assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')




<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="{{URL::asset('assets/jquery/dist/jquery.min.js')}}"></script>
    <script src="js/jquery.migrate.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/response.js"></script>
    <script src="assets/parallax.js/parallax.min.js"></script>
    <script src="assets/bootstrap-datepicker/dist/js//bootstrap-datepicker.min.js"></script>
    <script src="assets/galleria/galleria-1.4.2.min.js"></script>
    <script src="assets/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/colorbox/jquery.colorbox-min.js"></script>
    <script src="assets/bootbox/bootbox.js"></script>
    <script src="assets/parsley/parsley.min.js"></script>
    <script src="assets/jquery-input-mask/jquery.inputmask.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>