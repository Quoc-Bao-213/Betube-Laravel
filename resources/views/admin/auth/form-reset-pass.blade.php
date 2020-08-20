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
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form  action="" method="POST">
              @csrf
              <h1>Update Password</h1> 
              @if(session('success'))      
              <p style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                  {{ session('success') }}
              </p>                       
              @endif
              <div>
                <span style="color: #e96969; font-size: 1em">{{ $errors->first('new_password') }}</span>
                <input type="password"  name="new_password" class="form-control" placeholder="New password" />
                <span style="color: #e96969; font-size: 1em">{{ $errors->first('retype_password') }}</span>
                <input type="password"  name="retype_password" class="form-control" placeholder="Retype new password"/>
              </div>
              <div>
                <button type="submit" style="background: #73879C; color: white;" class="btn btn-default">Reset password</button>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
