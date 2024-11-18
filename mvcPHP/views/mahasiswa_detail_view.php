<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-center">Detail Data Mahasiswa</h3>
    <div class="table-responsive">
    <table class="table table-striped table-bordered width-50%">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NPM</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1; 
        foreach ($data as $row) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['npm']; ?></td>
            <td><?= $row['prodi']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
      <div class="mb-3">
        <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
