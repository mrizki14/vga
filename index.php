
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>VGA Tugas 4</title>
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center mt-5">
    <h3>Pendaftaran siswa baru Digital Talent</h3><br>
  </div>
  <h3 class="daftar">Daftar Menu siswa</h3>
  <div class="row">
    <div class="col-12">
      <ul>
        <li>
          <a class="btn btn-primary" href="create.php">Daftar jadi siswa</a>
        </li>
      </ul>
      <?php
      
      if(isset($_GET['message'])){
          echo ($_GET['message']);
  
      }

      ?>
    </div>
    <div class="col-12">
      <ul>
        <li>
        <a class="btn btn-success mt-3" href="pendaftar.php">Pendaftar</a>
        </li>
      </ul>
    </div>
    
  </div>

</div>


</body>
</html>