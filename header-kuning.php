 <!-- header layanan kami -->
 <section id="header-layanan-kami">
    <div class="row">
       <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-white bg-nav">
             <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./Assets/logo/logo syn cepat.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                   <div class="navbar-nav ">
                      <?php
                        if (isset($_SESSION['Level'])) {
                           if ($_SESSION['Level'] <> 'customer') { ?>
                            <a class="nav-link" href="admin-cp">Page <?= $_SESSION['Username'] ?></a>
                      <?php
                           }
                        }
                        ?>


                      <a class="nav-link active" href="?page=home">Beranda <span class="sr-only">(current)</span></a>
                      <a class="nav-link" href="?page=layanan-kami">Layanan Kami</a>
                      <a class="nav-link" href="?page=contact">Contact Us</a>
                      <!-- //KONDISI SEBELUM DAN SESUDAH LOGIN -->
                      <?php
                        if (!isset($_SESSION['IdUser'])) {
                           echo '<a class="nav-link" href="?page=login">Login</a>';
                        } else {
                           echo '<a class="nav-link" href="logout.php">Logout</a>';
                        }
                        ?>
                   </div>
                </div>
             </div>
          </nav>
       </div>
    </div>
 </section>
 <!-- akhir header -->