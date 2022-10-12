<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||PostTest Praktikum Pemrograman Web : OuNime | Anime Shirase|| -->
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OuNime | Anime Shirase</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="body">
<!-- /*  --------------------- Bagian Header --------------------- */  -->
    <div class="header">
        <div class="header-logo"> OuNime</div>
        <p id="judul">Website Anime Berbahasa Indonesia</p>        
    </div>

<!-- /*  --------------------- Bagian Navbar --------------------- */  -->
    <div class="navbar">
        <nav class="nav-list">
            <ul>
                <li><a href="index.php">HOME</a> </li>
                <li><a href="index.php">ANIME LIST</a> </li>
                <li><a href="contact.php">SOSMED</a> </li>
            </ul>
        </nav>
    </div>
    
<!--  /*  --------------------- Bagian Main ---------------------  */  -->
    <!-- Isi konten / konten utama -->
    <div class="content">
            
        <!-- Bagian anime On-Going  -->
        <div class="update-anime">
            <h3 class="section-title">Update Anime</h3>
         <!-- Konten 1 -->
            <div class="contents-item"> 
                <div class="card"> <a href="index.php">
                    <img src="assets/series/01.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Tensei shitara Ken Deshita</b></h4></a>
                        <p>Rank: 8.0</p> 
                        <p>* Kamis </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
         <!-- Konten 2 -->
            <div class="contents-item">
                <div class="card"> <a href="index.php">
                    <img src="assets/series/02.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Blue Lock</b></h4></a>
                        <p>Rank: 7.5</p> 
                        <p>* Minggu </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
        <!-- Konten 3 -->
            <div class="contents-item">
                <div class="card"> <a href="index.php">
                    <img src="assets/series/03.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Yuusha Party wo Tsuihou</b></h4></a>
                        <p>Rank: 7.0</p> 
                        <p>* Minggu </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
        <!-- Konten 4 -->
            <div class="contents-item">
                <div class="card"> <a href="index.php">
                    <img src="assets/series/04.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Noumin Kanren no SKill</b></h4></a>
                        <p>Rank: 7.8</p> 
                        <p>* Minggu </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
        <!-- Konten 5 -->
            <div class="contents-item">
                <div class="card"> <a href="index.php">
                    <img src="assets/series/05.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Shinmai Renkinjutsushi</b></h4></a>
                        <p>Rank: 7.2</p> 
                        <p>* Senin </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
        <!-- Konten 6 -->
            <div class="contents-item">
                <div class="card"> <a href="index.php">
                    <img src="assets/series/06.jpg"  height=300>
                    <div class="ctr"> 
                        <h4><b>Akuyaku Reijou nanode</b></h4></a>
                        <p>Rank: 7.3</p> 
                        <p>* Minggu </p>
                        <p>Anime Series</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- /*  --------------------- Bagian Fotoer ---------------------  */  -->
    <div class="footer">
        <div class="footer-logo">OuNime</div>
        <button onclick="dlmode()">Mode</button> <!--  Penambahan Dark/Light Mode -->
        
        <div class="footer-list">
            <ul>
                <li><a href="index.php">HOME</a> </li>
                <li><a href="index.php">ANIME LIST</a> </li>
                <li><a href="index.php">SOSMED</a> </li>
            </ul>
        </div>
    </div>

    <script src="main.js"></script> <!-- Penghubung penggantian mode Dark/Light -->
</body>
</html>