<?php
                    include 'env.php';
                    $id = $_GET['id'];
                    $agama = $_GET['agama'];
                    $jenis_kelamin = $_GET['jenis_kelamin'];
                    $query = "SELECT * FROM siswa WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    $count = mysqli_num_rows($result);
                    $no = 1;
                    while ($siswa = mysqli_fetch_assoc($result)) {
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Edit siswa</title>
</head>
<body>
    <h4 class="text-center mt-5">Edit Siswa</h4>
    <div class="container d-flex justify-content-center mt-5">
        <form action="update.php" method="POST" class="form-control w-50">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="<?= $siswa['nama'] ?>" class="form-control" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?= $siswa['alamat'] ?>" required>   
            <p>Jenis Kelamin</p>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="jenis_kelamin" value="laki-laki"  
            <?php
                if ($jenis_kelamin == 'laki-laki') {
                    echo "checked";
                }
                ?>/>
            <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
            <input class="form-check-input" type="checkbox" name="jenis_kelamin" id="inlineCheckbox2" value="perempaun"
            <?php
                if ($jenis_kelamin == 'perempuan') {
                    echo "checked";
                }
                ?>/>
            <label class="form-check-label mb-2" for="inlineCheckbox2">Perempuan</label> <br>
            <label for="agama">Agama</label>
            <select class="form-select mb-2" aria-label="Default select example" name="agama">
                <option> Pilih Agama</option>
                <option value="islam"
                <?php
                if ($agama == 'islam') {
                    echo "selected";
                }
                ?>
                >Islam</option>
                <option value="kristen"
                <?php
                if ($agama == 'kristen') {
                    echo "selected";
                }
                ?>
                >Kristen</option>
                <option value="hindu"
                <?php
                if ($agama == 'hindu') {
                    echo "selected";
                }
                ?>
                >Hindu</option>
                <option value="khonghucu"
                <?php
                if ($agama == 'khonghucu') {
                    echo "selected";
                }
                ?>
                >Khonghucu</option>
                <option value="buddha"
                <?php
                if ($agama == 'buddha') {
                    echo "selected";
                }
                ?>
                >Buddha</option>
            </select>
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control" value="<?= $siswa['asal_sekolah'] ?>" required> <br>
            <a class="btn btn-success" href="pendaftar.php">Back</a>
            <input type="hidden" name="id" value=<?= $siswa['id'] ?>>
            <input type="submit" class="btn btn-primary"></input>
            <?php
            
        }
        ?>   
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>