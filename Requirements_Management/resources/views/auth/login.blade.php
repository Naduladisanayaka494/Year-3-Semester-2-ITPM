@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <style>

    body {
 background-image: url("/template/template/assets/img/avatar/wall3.jpg");
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 150; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
  </style>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

   <!-- General CSS Files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/template/template/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/template/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
  <!-- font awsome 6.2.0-->

<!-- put this link in header in html file-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- visite this website 'https://fontawesome.com/' and select you icon is gonna be like that-->

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/template/template/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/template/template/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app" style="align-content: left;">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand"><br/>
            <!-- <img alt="image" src="/template/template/assets/img/avatar/Admin.jpg" width="150" class="rounded-circle shadow p-3 mb-5 bg-body rounded"> -->
           <h6 class="display-6">Food To Your Doorstep </h6>
            </div>
          <div class="card card-primary shadow p-3 mb-5 bg-body rounded">
            
              <div class="card-header"><h4 style="font-size: 28px; font-family:monospace;"><i class="fa-solid fa-star"></i> LOGIN</h4></div>
              <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                    <label for="emp_no">Email Address</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="form-group">
                    <label for="emp_no">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 <div class="form-group"><br/><br/>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="text-align: center; font-size: 16px;">
                      Login
                    </button>
                  </div>
                    <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="{{ route('register') }}">SignUp Now</a>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
  </div>

  <!-- General JS Scripts -->

  <script src="{{ asset('/template/template/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/template/template/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/template/template/assets/js/scripts.js') }}"></script>
  <script>
          window.setTimeout(function() {
            $('.alert').fadeTo(500,0).slideUp(500,function(){
              $(this).remove();
            });
          }, 3000);
  </script>
</body>
</html>