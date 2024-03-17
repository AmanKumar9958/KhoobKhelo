<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KhoobKhelo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="page1">
      <!-- Video Background -->
      <video autoplay loop muted play-inline class="background-clip">
        <source src="videos/bg6.mp4" type="video/mp4">
      </video>
        <!-- Navbar -->
        <header>
          <div class="navbar">
            <div class="logo">
              <a href="#"><img src="images/logo2.png" alt="Logo" /></a>
            </div>
            <div class="nav-list">
              <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Workout</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="about.php">About</a></li>
              </ul>
            <!-- </div>
            <div class="theme">
              <img src="images/moon.png" alt="moon" id="icon">
            </div> -->
          </div>
        </header>

        <!-- Main Content -->
        <section class="main">
            <div class="poster-sport">
                <div class="games sport"></div>
                <button class="explore-btn" >Explore Sports <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="poster-workout">
                <div class="workout sport"></div>
                <button class="explore-btn" >Explore Workout <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </section>
        <button class="home">Go to Home  <i class="fa-solid fa-arrow-right"></i></button>
        <!-- Page Visit Counter -->
        <div id="pageVisitCounter" style= "cursor: pointer;border: 2px solid black; border-radius: 20px; display: inline-block; color: yellow; font-size: 18px; background-color: black; font-weight: bold; position: absolute; bottom: 1.5%; left: 42.5%; padding: 7px;";>
          <?php
            session_start();
            if(isset($_SESSION['visitCounter'])){
              $_SESSION['visitCounter']++;
            }
            else{
              $_SESSION['visitCounter'] = 1;
            }
            echo "The number of visitors: " . $_SESSION['visitCounter'];
            ?>
        </div>
    </div>
</body>
</html>