<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('jquery.pjax.js')}}"></script>
    <style>
      body {
      padding-top: 50px;
      }
      .starter-template {
      padding: 40px 15px;
      text-align: center;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script type="text/javascript">
      $(function(){
	// pjax
	$(document).pjax('a', '#body')
	})
    </script>
  </head>

  <body id="body">
    @yield('nav')
    @yield('body')
  </body>
</html>
