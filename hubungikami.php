<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pakar Gigi dan Mulut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8535c9b97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hubungi.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
    <!-- Navbar  -->
    <?php include 'include/navbar.php'; ?>


    <div class="container-contact100">
        <div class="wrap-contact100 my-5">
            <form name="jabarysheet" id="jabaryreset" action="" method="POST" class="contact100-form validate-form">
                <div id="form_alerts">

                </div>
                <span class="contact100-form-title text-center">
                    Contact Us
                    <hr class="mx-auto" style="width:20%; background-color: #f49f16;">
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" id="nm" name="fullname" type="text" placeholder="Full Name" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
                    <input class="input100" id="eml" name="email" type="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                    <textarea class="input100" id="msg" name="message" placeholder="Your Message" required></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" name="simpan" id="btnsimpan" class="contact100-form-btn">
                        Send Email
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>


    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Terima Kasih <span class="fas fa-heart"></span> </h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ps-2">Pesan yang anda kirim telah diterima di database kami. </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/hubungikami.js"></script>


</body>

</html>