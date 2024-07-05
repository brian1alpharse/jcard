<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jastra Card | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/adminlte.min.css">

  <style type="text/css">
    #bg{
      background-image: url('<?php echo base_url() ?>asset/img/bg3.jpg');
      background-size: cover;
    }
  </style>

</head>
<body class="hold-transition login-page" id="bg">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url() ?>asset/img/jastra.png" width="200px" >
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan login untuk melanjutkan</p>

      <form id="login-form" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button id="submit-form" type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

     <!--  <p class="mb-1">
        <a href="forgot-password.html">Lupa password?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Daftar akun baru</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>asset/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>asset/app.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#submit-form').text("Login");
            $('#login-form').submit(function(e){
                e.preventDefault();
                 $('#submit-form').text("Check");
                var url = '<?php echo base_url(); ?>';
                var user = $('#login-form').serialize();
                var login = function(){
                    $.ajax({
                        type: 'POST',
                        url: url + 'Login/check_login',
                        dataType: 'json',
                        data: user,
                        success:function(response){
                            $('#msg').html(response.message);
                            
                            if(response.error){
                                $('#msg').removeClass('alert-success').addClass('alert-danger').show();
                                window.location.replace(response.link);
                            }
                            else{
                                $('#msg').removeClass('alert-danger').addClass('alert-success').show();
                                $('#login-form')[0].reset();
                                setTimeout(function(){
                                    //location.reload();
                                    window.location.replace(response.link);
                                }, 1);
                            }
                        }
                    });
                };
                setTimeout(login, 1);
            });
     
            $(document).on('click', '#clearMsg', function(){
                $('#msg').hide();
            });
        });
    </script>
</body>
</html>
