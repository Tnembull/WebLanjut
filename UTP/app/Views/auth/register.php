<?= $this->extend('templates/tempe'); ?>

<?= $this->section('contenta'); ?>

<title>Sign Up!</title>
</head>

<body>


  <div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
      <div class="col-6 mx-auto">
        <div class="jumbotron">
          <center>
            <h3>Sign Up</h3>
          </center>
          <form action="<?= site_url('auth/login') ?>" method="post">
            <div class="form-group">
              <label for="">First Name</label>
              <input autocomplete="off" autofocus="on" type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input autocomplete="off" autofocus="on" type="text" name="last_name" id="last_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input autocomplete="off" autofocus="on" type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input autocomplete="off" autofocus="on" type="text" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-warning btn-block">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>