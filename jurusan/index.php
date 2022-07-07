<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <title>Jurusan Siswa</title>
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
                  href="../home.php"
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
                  href="pendaftaran/index.php"
                  >Pendaftaran</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="padding: 20px 20px; font-size: 20px"
                  href="pembayaran/index.php"
                  >Pembayaran</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="content">
      <div class="container">
        <br /><br />
        <h1>Data Jurusan</h1>
        <br />
        <a href="create.php" class="btn btn-success">[+] Tambah Data</a>
        <br /><br />
        <div class="card border-0">
          <table class="table table-bordered table-hover">
            <thead class="">
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Jurusan</th>
                <th class="text-center">Jurusan</th>
                <th class="text-center" width=500>Aksi</th>
              </tr>
              <tbody>
                        <?php
                            include'../database.php';
                            $jurusan1 =  new jurusan();
                            $no = 1;
                            foreach ($jurusan1->index() as $data){
                        ?>
                        <tr>
                        <th class="text-center" scope="row"><?php echo $no++ ?></th>
                        <td class="text-center"><?php echo $data['kode_jurusan'] ?></td>
                        <td class="text-center"><?php echo $data['jurusan'] ?></td>
                        <td class="text-center">
                          <form action="proses.php" method="post">
                            <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a> 
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
          </table>
        </div>
      </div>
      <br /><br /><br />
      <footer class="text-center">@Create Riki Gusti 2022</footer>
    </div>
  </body>
</html>