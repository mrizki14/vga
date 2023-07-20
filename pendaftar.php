
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Daftar siswa</title>
</head>
<body>
    <div class="barang d-flex justify-content-center mt-5 ms-5">
        <div class="container ps-5">
            <h3 class="text-center mb-3">Pendaftar</h3>
            <a class="btn btn-primary ms-5 mb-4" href="export.php" target="_blank"><i class="bi bi-filetype-pdf">Print PDF</i></a>
            <table border="1" class="table table-bordered w-75 ms-5 text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>	
                    <th>Agama</th>	
                    <th>Asal Sekolah</th>	
                    <th>Action</th>	
                </tr>
                <?php
                    include 'env.php';
                    $query = "SELECT * FROM siswa";
                    $result = mysqli_query($conn,$query);
                    $count = mysqli_num_rows($result);
                    $no = 1;
                    while ($siswa = mysqli_fetch_assoc($result)) {
                ?>       
                <tbody>
                 <tr>
                    <td class="text-capitalize"><?= $no++?></td>
                    <td class="text-capitalize"><?= $siswa['nama'] ?></td>
                    <td class="text-capitalize"><?= $siswa['alamat'] ?></td>
                    <td class="text-capitalize"><?= $siswa['jenis_kelamin'] ?></td>
                    <td class="text-capitalize"><?= $siswa['agama'] ?></td>
                    <td class="text-capitalize"><?= $siswa['asal_sekolah'] ?></td>
                    <td class="text-capitalize">
                        <a class="btn btn-primary me-1" href="edit.php?id=<?=$siswa['id']?>&agama=<?=$siswa['agama']?>&jenis_kelamin=<?=$siswa['jenis_kelamin']?>">Edit</a>
                        <a class="btn btn-danger me-1" href="delete.php?id=<?=$siswa['id']?>&agama=<?=$siswa['agama']?>&jenis_kelamin=<?=$siswa['jenis_kelamin']?>" onclick="return confirm('Apakah kamu yakin?');">Delete</a>
               
                    </td>
                 </tr>
          
                </tbody>        
                    <?php
            
                    }
                    ?>            
            </table>
            <div class="ms-5">
                <a class="btn btn-success" href="index.php">Back</a>
                <span class="btn btn-info">Total pendaftar : <?= $count?></span>
            </div>
        </div>
        
    </div>
</body>
</html>

