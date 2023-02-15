<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pakar Gigi dan Mulut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>


    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100  justify-content-center align-items-center">
        <div class="bannertext">
            <div class="banner-heading">
                Sistem Pakar Gigi dan Mulut
            </div>
            <div class="banner-sub-heading">
                Periksa Kesehatan Gigi dan Mulut Anda Sekarang
            </div>
        </div>

    </div>

    <!-- Main Content Area -->

    <div class="section ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 mb-3">
                    <img src="gambar/index/diagnosaindex.png" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-lg-4 mt-2">
                    <h2 class="mb-4 heading text-center title">Periksa Kesehatan Gigi & Mulut</h2>
                    <p class="text-center">Sistem pakar ini memberikan kemudahan dalam melakukan diagnosa penyakit gigi & mulut</p>
                    <p class="mt-5 text-center"><a href="diagnosa.php" class="btn btn-success">Mulai Diagnosa</a></p>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');
        nav.classList.add('fixed-top');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('shrink', 'shadow');
            } else {
                nav.classList.remove('shrink', 'shadow');
            }
        });
    </script>
</body>

</html>