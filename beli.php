<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Belajar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--  My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php
      require_once "koneksi.php";
    ?>
    <!-- Navbar start  -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Cafe<span>belajar</span></a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#room">Room</a>
        <a href="contact">Contact</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <table><tr><td height="100"></td></tr></table>
    <!-- Navbar end -->
    <table width="100%">
      <tr>
              <?php
              $i=0;
                $darikopi=mysqli_query($konek, "SELECT * FROM kopi1");
                while ($dk=mysqli_fetch_array($darikopi)){
                  $i++;
                  echo "$i";
                  ?>
                      <td bgcolor="#000000">
                        <a href="beli1.php?p=<?php echo "$dk[0]"; ?>"><img src="img/kopi<?php echo "$dk[0]"; ?>.jpg" width="340"></a>
                      </td>
                  <?php
                }
              ?>
            </tr>
    </table>