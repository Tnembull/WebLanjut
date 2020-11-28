<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://ekrutassets.s3.ap-southeast-1.amazonaws.com/blogs/images/000/000/088/original/cara-menjadi-hacker-EKRUT.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item ">
      <img src="https://cdn.idntimes.com/content-images/post/20200314/0-9b3707466f12e152e67a22fb1dcb6afc_600x400.gif" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f1af6930ec96403ea202528%2F0x0.jpg" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





  <?= $this->endSection(); ?>