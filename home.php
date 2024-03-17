<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css" />
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
    <div class="container">
      <div id="preloader"></div>
      <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/t_youSWoGp8?si=dF6Z4hZrUA9VZm_F" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <div class="page1">
        <!-- NAVBAR -->
        <header>
          <div class="navbar">
            <div class="logo">
              <a href="#"><img src="images/logo2.png" alt="Logo" /></a>
            </div>
            <div class="nav-list">
              <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#fitness">Workout</a></li>
                <li><a href="#sport-section">Sports</a></li>
                <li><a href="about.php">About</a></li>
                
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
              type="text" onkeyup="search()" id="searchInput"
              placeholder="Search Anything.."
              class="query"
              value=""
            />
            <button type="submit" class="btn">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>
        <!-- BANNER SECTION -->
        <section>
          <div class="sport-banner">
            <a href="#sport-section"><button class="explore">Explore Sports</button></a>
          </div>
        </section>
        <!--  SPORTS SECTION -->
        <section class="sports" id="sport-section">
          <div class="sports1">
            <div class="cricket games">
              <img src="images/cricket.jpg" alt="Cricket" />
              <p id="sport-text">
                Cricket is a bat-ball game played between two teams, each
                comprising 11 players, on an oval-shaped field. The objective is
                to score runs by hitting the ball and running between the
                wickets, while the opposing team tries to get the batsmen out.
                It's popular in many countries, notably in the UK, Australia,
                India, Pakistan and West Indies, with various formats such a
                Test cricket, One Day International (ODIs), and Twenty20 (T20)
                matches. Cricket has a rich history, complex rules, and is known
                for its strategic depth and intense rivalries.
                <a href="https://en.wikipedia.org/wiki/Cricket" target="_blank"
                  >Read More</a
                >
              </p>
            </div>
            <div class="boxing games">
              <img src="images/boxing.jpg" alt="Boxing" />
              <p id="sport-text">
                Boxing is a combat sport where two fighters engage in a match
                within a roped-off ring. They aim to land punches on their
                opponent while dodging incoming strikes. Using padded gloves,
                boxers score points by hitting their opponent's upper body and
                head. Matches are divided into rounds, overseen by a referee,
                with victory often determined by knockout, judges' decision, or
                technical knockout. Boxing demands physical prowess, technical
                skill, and mental agility, making it a popular sport worldwide
                for both athletes and spectators.<a
                  href="https://en.wikipedia.org/wiki/Boxing"
                  target="_blank"
                  >Read More</a
                >
              </p>
            </div>
            <div class="basketball games">
              <img src="images/basketball.jpg" alt="Boxing" />
              <p id="sport-text">
                Basketball is a fast-paced team sport played on a rectangular
                court, where 2 teams aim to score points by shooting a ball
                through the opponent's hoop. It involves dribbling, passing, and
                shooting, with each team typically consisting of 5 players. It's
                renowned for its athleticism skill, and strategy, with
                professional leagues like the NBA attracting global attention.<a
                  href="https://en.wikipedia.org/wiki/Boxing"
                  target="_blank"
                  >Read More</a
                >
              </p>
            </div>
          </div>
          <div class="sports2">
            <div class="hockey games">
              <img src="images/hoxkey.jpg" alt="Hockey" />
              <p id="sport-text">
                Hockey is a fast-paced team sport played on ice or on field,
                depending on the variant (ice hockey or field hockey). Players
                use sticks to maneuver a small, hard ball or puck towards the
                opponent's goal, aiming to score by propelling it past the
                goalkeeper. Each team typically consists of six players,
                including a goalkeeper. Hockey requires speed, agility, skillful
                stick-handling, and teamwork. It is popular in many countries
                and is played at both amateur and professional levels, with
                international competitions such as the Olympics showcasing top
                talent.<a
                  href="https://en.wikipedia.org/wiki/Hockey"
                  target="_blank"
                  >Read More</a
                >
              </p>
            </div>
            <div class="kabaddi games">
              <img src="images/kabaddi.jpg" alt="Kabaddi" />
              <p id="sport-text">
                Kabaddi is a traditional sport originating from South Asia,
                particularly popular in India, Pakistan and Iran. It is a
                team-based game where two teams compete to score points by
                sending a "raider" into the opposing team's half, where they
                must tag as many opponents as possible and return to their half
                without being tackled. The defending team aims to stop the
                raider by tackling them before they can return. Kabaddi requires
                agility, strength, and quick thinking, making it physically
                demanding sport. It has gained international recognition with
                tournaments such as the Kabaddi World Cup.<a
                  href="https://en.wikipedia.org/wiki/Kabaddi"
                  target="_blank"
                  >Read More</a
                >
              </p>
            </div>
            <div class="volleyball games">
              <img src="images/valleyball.gif" alt="Kabaddi" />
              <p id="sport-text">
                Volleyball is a team sport played with six players on each side,
                aiming to score points by grounding the ball on the opponent's
                court. Players use their hands to hit the ball over a high net.
                with each team allowed three touches to return the ball. The
                game features fast-paces action, requiring agility, teamwork and
                strategic positioning. It's popular worldwide and played both
                recreational and competitively, with variations like beach
                volleyball also widely enjoyed.<a
                  href="https://en.wikipedia.org/wiki/Kabaddi"
                  target="_blank"
                  >Read More</a
                >
              </p>
            </div>
          </div>
          <h3 id="more"><a href="#">More..</a></h3>
        </section>
      </div>

      <hr>

      <div class="page2">
        <!-- workout-section -->
        <section class="workout" id="fitness" title="Workout">
            <div class="workout-category">
                <div class="men">
                    <div class="img">
                        <a href="#"><img src="images/workout_men.webp" alt=""></a>
                    </div>
                    <div class="paragraph">
                        <p>
                            <ul>
                                <li>Men generally have higher levels of muscle mass and testosterone compared to women, which can influence their workout routines.</li>
                                <li>Strength training and muscle-building exercises are often emphasized in men's workouts to enhance muscle mass and definition.</li>
                                <li>Cardiovascular exercises like running, cycling, and swimming are also important for overall health and fitness.</li>
                                <li>Flexibility and mobility exercises can help prevent injuries and maintain range of motion.</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="women">
                    <div class="paragraph">
                        <p>
                            <ul>
                                <li>Women may focus on a combination of strength training and cardiovascular exercises to build lean muscle, burn fat, and improve overall fitness.</li>
                                <li>Strength training can help women increase metabolism, improve bone density, and achieve a toned physique.</li>
                                <li>Cardio workouts such as aerobics, dancing, or interval training are effective for burning calories and improving heart health.</li>
                                <li>Incorporating exercises that target specific areas like the core, hips, and thighs can help women achieve a balanced and functional physique.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="img">
                        <a href="#"><img src="images/workout_women.avif" alt=""></a>
                    </div>
                </div>
                <div class="children">
                    <div class="img">
                        <a href="#"><img src="images/workout_chld.webp" alt=""></a>
                    </div>
                    <div class="paragraph">
                        <p>
                            <ul>
                                <li>Children's workouts should be age-appropriate and focus on promoting overall health, physical development, and coordination.</li>
                                <li>Activities like running, jumping, climbing, and playing sports are excellent ways for children to stay active and build strength, endurance, and agility.</li>
                                <li>Encouraging outdoor play, participation in organized sports, and recreational activities can help children develop lifelong fitness habits.</li>
                                <li>It's important to prioritize safety, proper form, and enjoyment to ensure children have a positive experience with exercise.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Workout Banner with button -->
        <section>
          <div class="bannerbtn">
              <a href="#fitness"><button class="workout-btn">Work out now!</button></a>
          </div>
        </section>
      </div>
    </div>




    <!-- JAVASCRIPT -->
    <script  src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('li').on('click', function(){
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
        })
      })
    </script>
    <script src="script.js"></script>
  </body>
</html>
