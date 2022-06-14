<div class="hold-transition login-page">
<?php if ($message = $this->session->flashdata('message')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Error!</strong> <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url('home')?>"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="<?=base_url('home/clickforgot')?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?=base_url('home/adminlogin')?>">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?=base_url('home/adminregister')?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</div>
