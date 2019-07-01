
<?php if(validation_errors()): ?>
<div class="col-md-2"></div>
<div class="col-md-8 ">
<div class="box box-danger">
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo validation_errors(); ?>
</div>
</div>
</div>
<?php endif; ?>


<div class="register-box">
  <div class="register-logo">
  <p><span class="fa fa-user-plus"></span> Registration </p>
  </div>
  <?php if(validation_errors()): ?>
<div class="box box-danger">
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo validation_errors(); ?>
</div>
</div>
<?php endif; ?>
  <div class="register-box-body">
    <p class="login-box-msg"> Register a new account</p>

    <form action="<?=base_url()?>Home/insert" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback">
        <input type="password" name="AcnRePass" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div> -->
      <div class="row">
        <div class="col-xs-4">
         <a href="" class="btn btn-primary btn-block btn-flat">Clear</a>
        </div>
        <div class="col-xs-4"></div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
        <input type="hidden" name="email_verification_code_sha1" id="email_verification_code_sha1" value="<?=uniqid();?>">
      </div>
    </form>

    <div class="social-auth-links text-center">
     
    </div>

    <a href="<?=base_url()?>Home/login" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div>