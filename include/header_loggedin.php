<nav class="navbar  navbar-expand-lg navbar-dark p-md-3 shrink">
    <div class="container">
        <!-- <a class="navbar-brand" href="index.php"><img src="img/index/Jabary.png" alt=""></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="diagnosa.php">Diagnosa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="riwayat.php">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="berita.php">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="hubungikami.php">Hubungi kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, <?php echo $_SESSION['username'] ?>
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="administrator">Pergi Ke Dashboard</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>