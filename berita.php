<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pakar Gigi dan Mulut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/berita.css">

</head>

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>

    <div class="container my-5">
        <div class="kategoricaption mb-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-center fw-bold judulkategori">Artikel</h1>
                    <hr class="mx-auto" style="width:10%; background-color: #f49f16;">

                </div>
            </div>

        </div>
        <div class="card-group vgr-cards" id="listberita">

        </div>
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/berita.js"></script>


</body>

</html>