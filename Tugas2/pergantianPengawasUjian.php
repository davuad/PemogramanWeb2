<?php
include 'koneksi.php';
include 'navbar.php';

$db = new PergantianPengawasUjian();

$data_catatan = $db->tampil_data_pengawas_ujian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Pergantian Pengawas Ujian</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center mb-4">Data Pergantian Pengawas Ujian</h1>
        
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary text-center">
              <tr>
                <th>No</th>
                <th>ID Pengganti</th>
                <th>Nama Pengawas Yang Diganti</th>
                <th>Unit Kerja</th>
                <th>Hari dan Tanggal Penggantian</th>
                <th>Jam</th>
                <th>Ruang</th>
                <th>Nama Pengawas Pengganti</th>
                <th>ID Dosen</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
            
                foreach($data_catatan as $row) {
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['pengganti_id']; ?></td>
                <td><?php echo $row['nama_pengawas_diganti']; ?></td>
                <td><?php echo $row['unit_kerja']; ?></td>
                <td><?php echo $row['hari_tgl_penggantian']; ?></td>
                <td><?php echo $row['jam']; ?></td>
                <td><?php echo $row['ruang']; ?></td>
                <td><?php echo $row['nama_pengawas_pengganti']; ?></td>
                <td><?php echo $row['dosen_id']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
