<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <style>
      body {
        background-color: rgb(197, 197, 197);
      }
    </style>
    <!--navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light"
      style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.493)"
    >
      <div class="container-fluid">
        <a class="navbar-brand" style="padding-left: 30px" href="#"
          ><img
            src="https://smkassalaambandung.sch.id/laravel-filemanager/photos/1/logo/5a1e12ade5d4d.png"
            alt="Logo Smk Assalaam"
            width="100"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="kanan" style="text-align: right; padding-right: 50px">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="padding: 20px 20px; font-size: 20px"
                  aria-current="page"
                  href="home.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active"
                  style="padding: 20px 20px; font-size: 20px"
                  href="index.php"
                  >Jurusan</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="padding: 20px 20px; font-size: 20px"
                  href="#"
                  >Pendaftaran</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="padding: 20px 20px; font-size: 20px"
                  href="#"
                  >Pembayaran</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>            <center><h2>Jurusan</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Jurusan
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $jurusan1 = new jurusan();
                foreach ($jurusan1->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode = $data['kode_jurusan'];
                    $jurusan = $data['jurusan'];
                }
            ?>
            <form action="../jurusan/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode_Jurusan</label> 
                        <input  type="text" class="form-control" name="kode_jurusan" value="<?php echo $kode; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?php echo $jurusan; ?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-success"">Ubah</button>
                </form>

            </div>
        </div>
        <footer class="text-center">@Create Riki Gusti 2022</footer>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>