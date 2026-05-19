<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM resep WHERE id='$id'");

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet">

</head>

<body style="background-color: #F8F8F8;">

<!-- BUTTON KEMBALI -->
<div class="container mt-4">

    <button class="btn"
    onclick="history.back()"
    style="background-color: #B5C18E;">
        ← Kembali
    </button>

</div>

<!-- DETAIL RESEP -->
<div class="container mt-5">

    <div class="row align-items-center">

        <!-- GAMBAR -->
        <div class="col-md-5 text-center">

            <img src="upload/<?php echo $data['sampul']; ?>"
            class="img-fluid rounded"
            style="max-height: 400px; object-fit: cover;">

        </div>

        <!-- DETAIL -->
        <div class="col-md-7">

            <h1 class="fw-bold mb-4">
                <?php echo $data['judul']; ?>
            </h1>

            <!-- AUTHOR -->
            <div class="d-flex align-items-center gap-3 mb-4">

                <div style="
                    width: 50px;
                    height: 50px;
                    background-color: #ccc;
                    border-radius: 50%;
                "></div>

                <div>
                    <strong>
                        <?php echo $data['author']; ?>
                    </strong>
                    <br>

                    <small class="text-secondary">
                        @<?php echo $data['username']; ?>
                    </small>
                </div>

            </div>

            <!-- AKSI -->
            <div class="d-flex align-items-center gap-3 mb-4">

                <button class="btn"
                style="background-color: #B5C18E;">
                    Simpan
                </button>

                <button class="btn"
                style="background-color: #B5C18E;">
                    Bagikan
                </button>

            </div>

            <!-- DESKRIPSI -->
            <div class="bg-white p-4 rounded shadow-sm">

                <p class="mb-0">
                    <?php echo $data['deskripsi']; ?>
                </p>

            </div>

        </div>

    </div>

</div>

<!-- LANGKAH -->
<div class="container mt-5">

    <h2 class="fw-bold mb-4">
        Langkah-Langkah
    </h2>

    <div class="row g-4">

        <!-- LANGKAH 1 -->
        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="row g-0">

                    <div class="col-4">

                        <img src="upload/<?php echo $data['gambar1']; ?>"
                        class="img-fluid rounded-start h-100"
                        style="object-fit: cover;">

                    </div>

                    <div class="col-8">

                        <div class="card-body">

                            <h5 class="card-title">
                                Langkah 1
                            </h5>

                            <p class="card-text">
                                <?php echo $data['langkah1']; ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- LANGKAH 2 -->
        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="row g-0">

                    <div class="col-4">

                        <img src="upload/<?php echo $data['gambar2']; ?>"
                        class="img-fluid rounded-start h-100"
                        style="object-fit: cover;">

                    </div>

                    <div class="col-8">

                        <div class="card-body">

                            <h5 class="card-title">
                                Langkah 2
                            </h5>

                            <p class="card-text">
                                <?php echo $data['langkah2']; ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- LANGKAH 3 -->
        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="row g-0">

                    <div class="col-4">

                        <img src="upload/<?php echo $data['gambar3']; ?>"
                        class="img-fluid rounded-start h-100"
                        style="object-fit: cover;">

                    </div>

                    <div class="col-8">

                        <div class="card-body">

                            <h5 class="card-title">
                                Langkah 3
                            </h5>

                            <p class="card-text">
                                <?php echo $data['langkah3']; ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- LANGKAH 4 -->
        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="row g-0">

                    <div class="col-4">

                        <img src="upload/<?php echo $data['gambar4']; ?>"
                        class="img-fluid rounded-start h-100"
                        style="object-fit: cover;">

                    </div>

                    <div class="col-8">

                        <div class="card-body">

                            <h5 class="card-title">
                                Langkah 4
                            </h5>

                            <p class="card-text">
                                <?php echo $data['langkah4']; ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- RESEP LAIN -->
<div class="container mt-5 mb-5">

    <h2 class="fw-bold mb-4">
        Resep Lainnya
    </h2>

    <div class="row g-4">

        <?php

        $resep_lain = mysqli_query($conn,
        "SELECT * FROM resep WHERE id != '$id' LIMIT 3");

        while($r = mysqli_fetch_assoc($resep_lain)) {

        ?>

        <div class="col-md-4">

            <div class="card border-0 shadow-sm h-100">

                <img src="upload/<?php echo $r['sampul']; ?>"
                class="card-img-top"
                style="height: 220px; object-fit: cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        <?php echo $r['judul']; ?>
                    </h5>

                    <p class="card-text">
                        <?php echo substr($r['langkah1'],0,60); ?>...
                    </p>

                    <a href="?page=Detail&id=<?php echo $data['id']; ?>"
                       class="btn mt-auto"
                       style="background-color: #B5C18E; color: #000000;">

                        Lihat Resep

                    </a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>