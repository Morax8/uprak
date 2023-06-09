<?php
require "../Config/Connect.php";
$siswa = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" />
  <!-- navbar -->
  <link rel="stylesheet" href="./navbar/fonts/icomoon/style.css" />
  <link rel="stylesheet" href="./navbar/css/owl.carousel.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./navbar/css/bootstrap.min.css" />
  <!-- Style -->
  <link rel="stylesheet" href="./navbar/css/style.css" />

  <!-- table -->
  <link rel="stylesheet" href="./Table/fonts/icomoon/style.css">
  <link rel="stylesheet" href="./Table/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./Table/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Table/css/style.css">

  <!--Sweetalert2 -->
  <script src="../dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="../dist/sweetalert2.css" />
  <title>User</title>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-xl-2">
          <h1 class="mb-0 site-logo">
            <a onclick="logout()">Siswa <span class="text-primary"> .</span> </a>
          </h1>
        </div>

        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li><a href="#home-section" class="nav-link">Home</a></li>
              <li class="has-children">
                <a href="#about-section" class="nav-link">About Us</a>
                <ul class="dropdown">
                  <li><a href="#team-section" class="nav-link">Team</a></li>
                  <li>
                    <a href="#pricing-section" class="nav-link">Pricing</a>
                  </li>
                  <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                  <li>
                    <a href="#gallery-section" class="nav-link">Gallery</a>
                  </li>
                  <li>
                    <a href="#services-section" class="nav-link">Services</a>
                  </li>
                  <li>
                    <a href="#testimonials-section" class="nav-link">Testimonials</a>
                  </li>
                  <li>
                    <a onclick="logout()" class="nav-link">Log Out</a>
                  </li>
                  <li class="has-children">
                    <a href="#">More Links</a>
                    <ul class="dropdown">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>
                      <li><a href="#">Menu Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li><a href="#blog-section" class="nav-link">Blog</a></li>
              <li><a href="#contact-section" class="nav-link">Contact</a></li>
              <li class="social">
                <a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a>
              </li>
              <li class="social">
                <a href="#contact-section" class="nav-link"><span class="icon-instagram"></span></a>
              </li>
              <li class="social">
                <a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px">
          <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
        </div>
      </div>
    </div>
  </header>
  <div class="hero"></div>
  <!-- end navbar -->
  <!-- STart table -->
  <div class="content">
    <div class="container">
      <h2 class="mb-5">Data Siswa</h2>

      <div class="table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>

              <th scope="col">No. Absen</th>
              <th scope="col">Nama</th>
              <th scope="col">NIS</th>
              <th scope="col">No telp</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($siswa as $sis) : ?>
              <tr scope="row">
                <td><?= $sis["absen"]; ?></td>
                <td><?= $sis["nama"]; ?><small class="d-block">Far far away, behind the word mountains</small></td>
                <td><?= $sis["nis"]; ?></td>
                <td><?= $sis["telp"]; ?></td>
                <td><?= $sis["jurusan"]; ?></td>
                <td><button onclick="btncncl('<?= $sis["id"]; ?>')" class="more">Delete</button></td>
                <td><button onclick="location.href='../Controller/edit.php?id=<?= $sis["id"]; ?>'" class="more">Edit</button></td>

              </tr>
            <?php endforeach; ?>
            <tr>
              <td colspan="11" align="center">
                <a href="../Controller/tambah.php" class="more"><span class="text">ADD</span></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>

  </div>
  <!-- navbar -->
  <script src="./navbar/js/jquery-3.3.1.min.js"></script>
  <script src="./navbar/js/popper.min.js"></script>
  <script src="./navbar/js/bootstrap.min.js"></script>
  <script src="./navbar/js/jquery.sticky.js"></script>
  <script src="./navbar/js/main.js"></script>

  <script src="../js/main.js"></script>
  <!-- table -->
  <!-- <script src="./Table/js/jquery-3.3.1.min.js"></script>
  <script src="./Table/js/popper.min.js"></script>
  <script src="./Table/js/bootstrap.min.js"></script>
  <script src="./Table/js/main.js"></script> -->

  <script>
    //logout
    function logout() {
      event.preventDefault(); // prevent the default anchor behavior
      Swal.fire({
        icon: 'warning',
        type: "warning",
        title: "Log Out?",
        showCancelButton: true,
        confirmButtonText: "Log Out",
      }).then((result) => {
        location.href = "../Controller/logout.php";
      });
    }
  </script>
</body>

</html>