<div class="hold-transition register-page">
<?php $message = $this->session->flashdata('msg'); if (($message!=NULL||$message!='')&&$message['message']!=''): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error!</strong> <?php echo $message['message']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url('home')?>"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?=base_url('home/clickregister')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full name" value="<?=(($message!=NULL||$message!='')&&$message['type']=='signuperror')?$message['fullname']:""?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?=(($message!=NULL||$message!='')&&$message['type']=='signuperror')?$message['email']:""?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?=(($message!=NULL||$message!='')&&$message['type']=='signuperror')?$message['password']:""?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="confirmpass" name="confirmpass" class="form-control" placeholder="Retype password" value="<?=(($message!=NULL||$message!='')&&$message['type']=='signuperror')?$message['confirmpass']:""?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="agreeTerms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="javascript:;" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="javascript:;" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="<?=base_url('signin')?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

</div>
