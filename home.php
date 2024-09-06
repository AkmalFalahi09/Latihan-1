<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include "header.php";
?>
    <h2>Selamat datang, <?=$_SESSION['nama_pegawai']?></h2>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3sMJGfphkJfaOopbwUyBWi?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    <?php
    include "footer.php";
?>
</body>
</html>
