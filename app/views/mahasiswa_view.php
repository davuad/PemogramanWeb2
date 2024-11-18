<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa dan Program Studi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h3 class="mb-4 text-center">Daftar Mahasiswa</h3>
    <div class="mb-3">
      <a href="index.php?prodi=''" class="btn btn-success mt-3">Daftar Program Studi</a>
    </div>
    <?php foreach ($data as $row) : ?>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?php echo $row['nama']; ?>
          <a href="index.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
        </li>
      </ul>
    <?php endforeach; ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
