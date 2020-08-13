<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Betube</title>

    <!-- Bootstrap -->
    <link href=" {{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{ asset('../vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href=" {{ asset('../vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href=" {{ asset('../build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form action="{{ route('admin-reset-password') }}" method="POST">
              @csrf
              <h1>Reset Password Form</h1>
              @if(session('error'))
              <p style="color: #e96969 !important; text-align: center; margin-bottom: 0.5rem">
                  {{ session('error') }}
              </p>  
              @elseif(session('success'))      
              <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                  {{ session('success') }}
              </p>                       
              @endif
              <div>
                <input type="email"  name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <button style="background: #73879C; color: white;" class="btn btn-default submit">Reset your password</button>
              </div>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Admin Betube</h1>
                  <p>©2020 All Rights Reserved. Admin Betube is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
