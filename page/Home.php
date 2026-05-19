<div class="container">

        <?php include 'koneksi.php';?>
        
        <div class="container">
        <div class="row g-4 mb-4">

        <?php
        $query = mysqli_query($conn,
        "SELECT * FROM resep ORDER BY id DESC"
        );

        while($data = mysqli_fetch_array($query)){

        ?>

        <div class="col-lg-3 col-md-6">

            <div class="card recipe-card h-100">

                <!-- GAMBAR -->
                <img src="upload/<?php echo $data['sampul']; ?>"
                     class="card-img-top"
                     alt="gambar resep">

                <!-- ISI CARD -->
                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        <?php echo $data['judul']; ?>
                    </h5>

                    <p class="card-text">

                        <?php
                        echo substr($data['langkah'], 0, 70);
                        ?>...

                    </p>

                    <!-- BUTTON -->
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