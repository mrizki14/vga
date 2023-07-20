<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Daftar siswa</title>
</head>
<body>
    <h4 class="text-center mt-5">Daftar Siswa</h4>
    <div class="container d-flex justify-content-center mt-5">
        <form action="store.php" method="POST" class="form-control w-50">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>   
            <p>Jenis Kelamin</p>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="jenis_kelamin" value="laki-laki">
            <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
            <input class="form-check-input" type="checkbox" name="jenis_kelamin" id="inlineCheckbox2" value="perempuan">
            <label class="form-check-label mb-2" for="inlineCheckbox2">Perempuan</label> <br>
            <label for="agama">Agama</label>
            <select class="form-select mb-2" aria-label="Default select example" name="agama">
                <option selected> Pilih Agama</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="khonghucu">Khonghucu</option>
                <option value="buddha">Buddha</option>
            </select>
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control" required> <br>
            <a class="btn btn-success" href="index.php">Back</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
    
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>