<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk 1 - Toko Herbal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS untuk memusatkan konten */
        .product-detail {
            display: flex;
            flex-direction: column;
            align-items: center; /* Memusatkan secara horizontal */
            text-align: center; /* Memusatkan teks */
            margin: 20px; /* Jarak dari tepi */
        }

        .product-detail img {
            max-width: 100%; /* Gambar responsif */
            height: auto; /* Mempertahankan rasio aspek */
        }

        .product-detail button {
            margin-top: 20px; /* Jarak atas tombol */
            padding: 12px 20px; /* Padding tombol */
            background-color: #4CAF50; /* Warna latar belakang hijau */
            color: white; /* Warna teks putih */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut membulat */
            font-size: 16px; /* Ukuran font */
            cursor: pointer; /* Kursor pointer saat hover */
            transition: background-color 0.3s ease; /* Transisi halus untuk perubahan warna */
        }

        .product-detail button:hover {
            background-color: #45a049; /* Warna hijau lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="product-detail">
            <h1>Teh Herbal</h1>
            <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1645536708/attached_image/7-manfaat-teh-herbal-bagi-kesehatan.jpg" alt="Gambar Produk 1">
            <p>Deskripsi: Ini adalah deskripsi produk 1. Produk ini terbuat dari bahan-bahan herbal berkualitas tinggi yang bermanfaat untuk kesehatan Anda.</p>
            <p>Harga: Rp 100.000</p>
            <a href="https://youtu.be/eh7cYg8MxJg?si=nt9rr9W-nNL5bnSY"><button>Beli Sekarang</button></a>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>