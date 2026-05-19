<?php

include 'koneksi.php';

/* AMBIL KATEGORI DARI URL */

$kategori = $_GET['kategori'];

/* QUERY */

$query = mysqli_query($conn,

"SELECT * FROM resep
WHERE kategori='$kategori'
ORDER BY id DESC"

);

?>

<div class="container">

    <div class="row g-4">

        <?php while($data = mysqli_fetch_array($query)){ ?>

        <div class="col-lg-3 col-md-6">

            <div class="card recipe-card h-100">

                <img src="upload/<?php echo $data['sampul']; ?>"
                     class="card-img-top">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        <?php echo $data['judul']; ?>
                    </h5>

                    <p class="card-text">

                        <?php
                        echo substr($data['langkah1'],0,70);
                        ?>...

                    </p>

                    <a href="?page=Detail&id=<?php echo $data['id']; ?>"
                       class="btn mt-auto"
                       style="background-color:#B5C18E;">

                        Lihat Resep

                    </a>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>