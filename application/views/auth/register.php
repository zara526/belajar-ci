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
  <div class="container login-container" style="margin-top: 7%;">
      <div class="row">
	  <?php if($this->session->flashdata('suc')):?>
		<div class="alert alert-success">
			<?= $this->session->flashdata('suc');?>
		</div>
		<?php endif ?>
		<?php if($this->session->flashdata('warn')):?>
		<div class="alert alert-danger">
			<?= $this->session->flashdata('warn');?>
		</div>
		<?php endif;?>
        <div class="col-md-6 ads">
			<img src="<?php echo base_url('assets\dist\img\AdminLTELogo.png')?>" alt="profile_img" style="padding-top: 15px;" height="370px" width="250px;">
        </div>
        <div class="col-md-6 login-form" style="background-color: #ecd4ff">
          <h3>Register</h3>
          <form action="<?= base_url('auth/daftar')?>" method="POST">
		  <div class="form-group">
              <input type="text" class="form-control" name="nama" placeholder="Namamu">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
			<div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
			<div class="form-group">
              <input type="password" class="form-control" name="cfpassword" placeholder="Confirm Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Register</button>
            </div>
            <div class="form-group">
                <small>Sudah punya akun? <a href="login">Login</a></small>
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
