<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <title>Dashboard</title>
<!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/template/template/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/template/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css')}}">
  <!-- font awsome 6.2.0-->
<!-- put this link in header in html file-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- visite this website 'https://fontawesome.com/' and select you icon is gonna be like that-->

  <!-- CSS Libraries -->
   <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{ asset('dist\vendors\bootstrap\css\bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist\vendors\jquery-ui\jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist\vendors\jquery-ui\jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist\vendors\simple-line-icons\css\simple-line-icons.css')}}">        
        <link rel="stylesheet" href="{{ asset('dist\vendors\flags-icon\css\flag-icon.min.css')}}"> 
        <link rel="stylesheet" href="{{ asset('dist\vendors\flag-select\css\flags.css')}}">
        <!-- END Template CSS-->   

        <!-- START: Page CSS-->
        <link rel="stylesheet" href="{{ asset('dist\vendors\datatable\css\dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist\vendors\datatable\buttons\css\buttons.bootstrap4.min.css;')}}">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('dist\css\main.css')}}">
        <!-- END: Custom CSS-->     

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="UTF-8">
 
        <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    </head>
<body>
    
<div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
    @include('layouts.header')

    @include('layouts.sidebar')

    @yield('content')

    @include('layouts.footer')


    </div>
    </body>
   
</html>
