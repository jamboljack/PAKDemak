<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Demak">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logodemak.png">
  <title>Penetapan Angka Kredit Guru Kab. Demak</title>
  <!--Core CSS -->
  <link href="<?php echo base_url(); ?>bs3/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>font/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-body">
  <div class="container">
    <?php if ($this->session->flashdata('notification')) { ?>
        <div class="alert alert-warning fade in">
            <?php echo $this->session->flashdata('notification'); ?>
        </div>
    <? } ?>
    <?php echo validation_errors('<div class="alert alert-warning fade in">', '</div>'); ?>

    <form class="form-signin" action="<?php echo site_url('login/validasi'); ?>" method="post">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <h2 class="form-signin-heading">Login Sistem</h2>
      <div class="login-wrap">
        <div class="user-login-info">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username Anda" autocomplete="off" required autofocus>          
          <input type="password" class="form-control" name="password" id="password" placeholder="Password Anda" autocomplete="off" required>
        </div>
        <button class="btn btn-lg btn-login btn-block" type="submit">Masuk</button>
      </div>          
    </form>
  </div>
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>bs3/js/bootstrap.min.js"></script>
</body>
</html>