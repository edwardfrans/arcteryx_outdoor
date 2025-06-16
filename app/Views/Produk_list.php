<!DOCTYPE html>
<html>
<head><title>Produk</title></head>
<body>
<h1>Daftar Produk</h1>
<?php foreach($produk as $p): ?>
    <div>
        <img src="<?= base_url('assets/images/' . $p->gambar) ?>" width="100">
        <h3><?= $p->nama ?></h3>
        <p>Rp <?= number_format($p->harga) ?></p>
        <a href="<?= site_url('keranjang/tambah/' . $p->id) ?>">Tambah ke Keranjang</a>
    </div>
<?php endforeach; ?>
</body>
</html>
