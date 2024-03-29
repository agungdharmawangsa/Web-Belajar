<!-- STARTING SESSION -->
<?php
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == NULL){
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Universitas Udayana</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body <?php echo ($_SESSION['level']=='admin') ? "style='background-color: #ffcdd2'" : "style='background-color: #c8e6c9'"; ?>>
    <div class="left-panel">
        <section class="logo">
            <img class="logounud" src="./picture/unud.png" alt="unud.png" height="150px" />
        </section>
        <section class="sub-panel">
      <h3>POPULAR ARTICLE</h3>
    </section>
    <section class="sub-panel-1">
      <a href="#" style="text-decoration: none;">
        <h4>TOP SEARCH</h4>
      </a>
    </section>
    <section class="sub-panel-1">
      <a href="#" style="text-decoration: none;">
        <h4>DEPARTMENT NEWS</h4>
      </a>
    </section>
    <section class="sub-panel-1">
      <a href="#" style="text-decoration: none;">
        <h4>UNUD INNOVATION</h4>
      </a>
    </section>
    <section class="sub-panel-1">
      <a href="#" style="text-decoration: none;">
        <h4>UNUD DAILY</h4>
      </a>
    </section>
    </div>
    <div class="right-panel">

        <section class="navbar">
      <ul>
        <li>
          <a href="index.php" style="text-decoration: none;">
            <h3>HOME</h3>
          </a>
        </li>
        <li>
          <a href="pengajar.php" style="text-decoration: none;">
            <h3>PENGAJAR</h3>
          </a>
        </li>
        <li>
          <a href="about.php" style="text-decoration: none;">
            <h3>TENTANG</h3>
          </a>
        </li>
        <li>
          <a href="kontak.php" style="text-decoration: none;">
            <h3>KONTAK</h3>
          </a>
        </li>
        <li>
          <a style="color: red;" href="php/logout.php">
            <h3>LOGOUT</h3>
          </a>
        </li>
      </ul>
    </section>

        <section class="deskripsi">
            <div class="polaroid">
                <img src="./picture/neil.png" alt="profil" width="200px" height="275px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Neil De Grase Tyson</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456789</p>
                </div>
            </div>
            <div class="polaroid">
                <img src="./picture/walter.png" alt="profil" width="200px" height="275px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Walter Lewin</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456789</p>
                </div>
            </div>
            <div class="polaroid">
                <img src="./picture/einstein.png" alt="profil1" width="200px" height="275px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Albert Einstein</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456789</p>
                </div>
            </div>
            <div class="polaroid">
                <img src="./picture/donald.png" alt="profil1" width="200px" height="275px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Donald Trump</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456789</p>
                </div>
            </div>
        </section>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
    </div>
</body>

</html>