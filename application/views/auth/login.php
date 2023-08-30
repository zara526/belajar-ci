<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?= $title ?></title> <!--gunakan tag PHP $title  -->
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  	<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script-- src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/style.css')?>">

  </head>
  <body>
  <div class="container login-container">
		<?php if($this->session->flashdata('hayolo')):?>
		<div class="alert alert-danger">
			<?= $this->session->flashdata('hayolo');?>
		</div>
		<?php endif;?>
      <div class="row">
        <div class="col-md-6 ads">
			<img src="<?php echo base_url('assets\dist\img\AdminLTELogo.png')?>" alt="profile_img" height="300px" width="300px;">
        </div>
        <div class="col-md-6 login-form" style="background-color: #ecd4ff">
			<h1><span id="jl">Ayosh</span><span id="jk">company</span></h1>
          
          <h3>Login</h3>
          <form action="<?= base_url('auth/verifikasi')?>" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-block" name="submit">Login</button>
            </div>
            <div class="form-group">
                <small>Anda belum punya akun? <a href="register">Register</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- jQuery -->
  </body>
</html>
