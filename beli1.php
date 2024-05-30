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
      $p=$_GET['p'];
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
        <td width="200"></td>
        <td width="400" bgcolor="#000000">
          <img src="img/kopi<?php echo "$p"; ?>.jpg">
        </td>
        <td width="40" bgcolor="#000000"></td>
        <td>
          <form method="get" action="simpanbeli.php">
            <input type="hidden" name="p" value="<?php echo "$p"; ?>">
            <table bgcolor="#000000" height="170">
              <tr>
                <td><font size="+1">Nama Pemesan</font></td>
                <td width="20"><font size="+1">:</td>
                <td bgcolor="#000000"><input type="text" name="nama"></td>
              </tr>
              <tr>
                <td><font size="+1">no.HP</font></td>
                <td width="20"><font size="+1">:</td>
                <td bgcolor="#000000"><input type="text" name="jumlah"></td>
              </tr>
              <tr>
                <td colspan="2"></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
              </tr>
            </table>
          </form>
        </td> 
        </tr>
    </table>