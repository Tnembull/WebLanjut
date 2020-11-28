<?= $this->extend('templates/tempe'); ?>

<?= $this->section('contenta'); ?>

  <title>Login</title>
</head>

<body>

  <div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
      <div class="col-6 mx-auto">
        <div class="jumbotron">
          <center>
            <h3>Login Form</h3>
          </center>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Username</label>
              <input autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input autocomplete="off" autofocus="on" type="password" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-primary btn-block">log In</button>
            <button class="btn btn-primary btn-block"><a  class="text-light " href="<?= site_url('auth/register') ?>">Sign up</a></button>

          </form>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection(); ?>