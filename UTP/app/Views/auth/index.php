<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<title>Bulins</title>
</head>

<body>
  </div>
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="https://seeklogo.com/images/G/guy-fawkes-logo-EB582F59E5-seeklogo.com.png" width="500">
      <h1 class="display-4">User Unknown</h1>
      <br>
      <h1> WE ARE ANONYMOUS</h1>
      <h2>WE DO NOT FORGIVE</h2>
      <h3>WE DO NOT FORGET</h3>
      <h4>EXPECT US</h4>
      <button class="btn btn-dark">
        <a class="text-light" href="<?= site_url('auth/isi') ?>">Unknown</a>
      </button>
    </div>
  </div>


  <?= $this->endSection(); ?>