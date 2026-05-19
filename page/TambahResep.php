<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<form action="prosesTambah.php"
      method="POST"
      enctype="multipart/form-data">

    <div class="wrapper">

        <!-- ======================
             HEADER
        ======================= -->

        <div class="header-section">

            <!-- SAMPUL -->
            <label class="sampul-box">

                <input type="file"
                       name="sampul"
                       id="previewSampul"
                       accept="image/*"
                       hidden>

                <img id="gambarPreview">

                <span id="textPreview">
                    sampul
                </span>

            </label>

            <!-- INPUT JUDUL -->
            <input type="text"
                   name="judul"
                   class="judul-input"
                   placeholder="Tuliskan Deskripsi Makanan/Minuman Anda">

        </div>

        <!-- ======================
             STEP 1
        ======================= -->

        <div class="step-section">

            <label class="upload-box">

                <input type="file"
                       name="gambar1"
                       hidden>

                <span>+</span>

            </label>

            <textarea name="langkah1"
                      placeholder="Masukan Deskripsi langkah-langkah..."></textarea>

        </div>

        <!-- ======================
             STEP 2
        ======================= -->

        <div class="step-section">

            <label class="upload-box">

                <input type="file"
                       name="gambar2"
                       hidden>

                <span>+</span>

            </label>

            <textarea name="langkah2"
                      placeholder="Masukan Deskripsi langkah-langkah..."></textarea>

        </div>

        <!-- ======================
             STEP 3
        ======================= -->

        <div class="step-section">

            <label class="upload-box">

                <input type="file"
                       name="gambar3"
                       hidden>

                <span>+</span>

            </label>

            <textarea name="langkah3"
                      placeholder="Masukan Deskripsi langkah-langkah..."></textarea>

        </div>

        <!-- ======================
             STEP 4
        ======================= -->

        <div class="step-section">

            <label class="upload-box">

                <input type="file"
                       name="gambar4"
                       hidden>

                <span>+</span>

            </label>

            <textarea name="langkah4"
                      placeholder="Masukan Deskripsi langkah-langkah..."></textarea>

        </div>

        <!-- ======================
             KATEGORI
        ======================= -->

        <div class="kategori-box">

            <select name="kategori">

                <option value="makanan">
                    Makanan
                </option>

                <option value="minuman">
                    Minuman
                </option>

                <option value="camilan">
                    Makanan Ringan
                </option>

            </select>

        </div>

        <!-- ======================
             BUTTON
        ======================= -->

        <div class="button-box">

            <button type="submit">
                Mulai bagikan resep anda sekarang??
            </button>

        </div>

    </div>

</form>

</body>
</html>