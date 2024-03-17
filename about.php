<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
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
        <header>
            <div class="navbar">
              <div class="logo">
                <a href="#"><img src="images/logo2.png" alt="Logo" /></a>
              </div>
              <div class="nav-list">
                <ul>
                  <li class="active" ><a href="home.php" class="nav-links" >Home</a></li>
                  <li><a href="#" class="nav-links" >Workout</a></li>
                  <li><a href="#" class="nav-links" >Sports</a></li>
                  <li><a href="about.php" class="nav-links" >About</a></li>
                  <!-- <li class="slider" ></li> -->
                  
                </ul>
              </div>
              <div class="theme">
                <img src="images/moon.png" alt="moon" id="icon">
              </div>
            </div>
        </header>
          <!-- Search Box -->
        <div class="search-box-input">
            <div class="search">
              <input
                type="text"
                placeholder="Search Anything.."
                class="query"
                value=""
              />
              <button type="submit" class="btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
        </div>
    </div>
    <script  src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('li').on('click', function(){
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
        })
      })

    function workingSearchBox(){
    let query = document.querySelector('.query');
    let searchBtn = document.querySelector('.btn');

    searchBtn.onclick = function(){
    let url = 'https://www.google.com/search?q='+query.value;
    window.open(url);
    window.location.reload();
}
}
    workingSearchBox();

    function changeTheme(){
    var icon = document.getElementById("icon");
    icon.onclick= function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src ="images/sun.png";
        }
        else{
            icon.src = "images/moon.png";
        }
    }
}
    changeTheme();
    </script>
</body>
</html>