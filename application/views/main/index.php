<?php if (validation_errors()) : ?>
  <div class="box box-danger">
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo validation_errors(); ?>
    </div>
  </div>
<?php endif; ?>

<form action="<?= base_url() ?>Home/login" method="post">

  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url() ?>Home/login"><b>Bartolome's</b> Rentals</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <!-- /.col -->
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <button type="submit" value="Login" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <div class="col-md-4">
          <a href="<?= base_url() ?>Home/register" class="btn btn-default btn-block btn-flat">Sign Up</a>
        </div>
        <!-- /.col -->
    </div>
</form>


<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function() {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>