<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fungi</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light-subtle">
    <!-- Include navbar from navbar.php -->
    <?php include('navbar.php'); ?>

    <div class="bg mt-2">
        <div class="d-flex flex-column justify-content-center 
            align-items-center h-100 text-center text-white">
            <h1 class="cover-title">
                Skincare Checker For Fungal Acne
            </h1>
            <p>
                Say goodbye to manual analysis — let us handle it for you! Our system scans and delivers accurate results effortlessly.
            </p>
            <div class="scan-below">
                <p class="scan-below-text">Start Scanning Below</p>
            </div>
        </div>
    </div>
    <div class="form px-3">
        <div class="form-floating">
            <select class="form-select" id="category" aria-label="Pilih Kategori Produk:">
                <option value="facialWash">Facial Wash</a></option>
                <option value="moisturizer">Moisturizer</a></option>
                <option value="serum">Serum</a></option>
                <option value="sunscreen">Sunscreen</a></option>
                <option value="toner">Toner</a></option>
                <option value="makeupRemover">Makeup Remover</a></option>
            </select>
            <label for="category">Pilih Kategori Produk:</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Masukkan Kandungan dari product" id="ingredients" style="height: 120px;"></textarea>
            <label for="ingredients">Masukan Komposisi Produk (Dipisahkan dengan koma):</label>
        </div>
        <div id="tombol" class="d-grid gap-2 col-3 mx-auto" onclick="checkIngredients()">
            <button class="btn btn-success p-3" type="button"
                data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="Tekan untuk memulai analisis dan lihat rekomendasi produk">
                Check
            </button>
        </div>
    </div>
    <div class="result" id="result"></div>

    <script src="script.js"></script>
</body>

</html>