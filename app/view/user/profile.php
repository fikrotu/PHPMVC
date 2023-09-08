<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
    <h1>Selamat User</h1>
    <img src="<?= BASE_URL; ?>/img/profile_icon.png" class="rounded-circle shadow">
    
    <p> Halo, nama saya <?= $data['nama'];?>, saya seorang <?= $data['pekerjaan']?></p>
    
</body>
</html>