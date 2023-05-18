<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>home</title>

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

<body style="background-color: #eeeeee;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
           
            <div class="card card-primary shadow p-3 mb-5 bg-body rounded">
              <div class="card-header"><h4> <i class="fa-solid fa-star"></i> Home Page!</h4></div>
              <div class="card-body">
                  <div class="form-group">
                    <a href="{{url('/login')}}"><button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                   Switch to the Login Page
                    </button></a>
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