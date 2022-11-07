<?php
 session_start();
 if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['gender']) ){
 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <?php
    if ($_SESSION['gender'] === "female" ){
    
        ?>
        <link rel="stylesheet" href="css/home-style.css" />

        <?php }else{?>

            
        <link rel="stylesheet" href="css/home-style2.css" />

        <?php
        }
        ?>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>YourLook Home</title>
</head>

<body onload="initialLoading()">

    <div class="content">
        <header class="app-header">
            <div class="container">
                <div id="cont-greet">
                    <h1 id="greeting"> </h1>
                    <h1> <?php echo $_SESSION['username']; ?></h1>
                </div>
            </div>
        </header>
    </div>

    <!--<p>Welcome to home page</p>-->

    <div id="grid-container">
        <section class = "weather-description">
            <div class="card">
                <div class="search">
                    <input type="text" class="search-bar" placeholder="Search">
                    <button>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="weather loading">
                <h2 class="city">Weather in Pretoria</h2>
                <h1 class="temp">23°C</h1>
                <div class="flex">
                    <img src="https://openweathermap.org/img/wn/04n.png" alt="picture of weather" class="icon" />
                    <div class="description">Cloudy</div>
                </div>
                <div class="feels_like"></div>
                <div class="wind"></div>
                </div>
            </div>
            </section>
    
    
    
            <section class="outfit">
                <div class="load">
                    <div class="fit_title">Outfit</div>
                    <button type="submit">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 0 0-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 0 1 655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 0 1 279 755.2a342.16 342.16 0 0 1-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 0 1 109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 0 0 3 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"></path>
                        </svg>
                    </button>
                </div>
                <div class="outfit-img">
                    <img src="" class="fit" />
                    <img src="" class="fit"/>
                    <img src="" class="fit"/>
                    <img src="" class="fit"/>
                    <img src="" class="fit"/>                    
                    <img src="" class="fit"/>
                    <img src="" class="fit"/>
                </div>

            </section>
    
            


        </section>

        <section class="events">
            <div class="events_title">Events</div>
        

            <a href="https://calendar.google.com/calendar/r?pli=1" class="events-calender">
            <section>
                <div id="events-today">
                    What's Happening Today?
                </div>

                <span>
                    <h3 id="myDate">
                    </h3>
                </span>
            </section>
        </a>
    </section>
    </div>

        <div class="app-footer">
            <ul>
                <li>
                    <a href="home.php" class="fas fa-home"></a>
                    <p>Home</p>
                </li>

                <li id="closet-icon">
                    <a href="closet.php" class="fas fa-door-closed"></a>
                    <p>Closet</p>
                </li>

                <li>
                    <a href="explore.php" class="fas fa-search"></a>
                    <p>Explore</p>
                </li>

                <li>
                    <a href="user.php" class="fas fa-user"></a>
                    <p>Me</p>
                </li>
            </ul>
        </div>
        <?php
         if ($_SESSION['gender'] === "female" ){
    
        ?>
        <script src="js/home.js"></script>
    
        <?php }else{?>

        <script src="js/home2.js"></script>

        <?php
        }
        ?>
</body>

</html>
<?php
 }else{
 header("Location:/YourLook/index.php");
 exit();
 }
 ?>