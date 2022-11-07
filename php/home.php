<?php
    session_start();
    echo('BEGINNING OF HOME PAGE');
    if (array_key_exists("user", $_SESSION) && $_SESSION["user"]=='Vanessa@example.com'){
        echo('Vanessa');
        header('Location:' . '/YourLook/users/vanessa/home.php');
    }

    else if (array_key_exists("user", $_SESSION) && $_SESSION["user"]=='Benny.24@example.com'){
        echo('Benedict');
        header('Location:' . '/YourLook/users/benny/home.php');
    }

    else{
        echo('NEW USER');
        header('Location:' . 'home_newuser.php');
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="/YourLook/css/homestyle2.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<title>Sweather Home Page</title>
</head>


<body onload=initialLoading()>
    <div class="overall-content">
        <div class = "content">
            <header class="app-header">
                <div class="container">
                    <div id="cont-greet">
                        <h1 id="greeting"></h1>
                    </div>
                </div>
            </header>
        </div>

        <div id="grid-container">
                <section class="quote">
                    <div id="quote-today">
                        QUOTE
                    </div>
                    
                    <section id="quote-content">quote goes here</section>
                </section> 
        
                <a href="https://openweathermap.org/city" class="weather">
                <section>
                    <div id="today">
                        WEATHER
                    </div>
                    
                    <section id="weather-content">weather goes here</section>
                </section>
                </a>

                <a href="styleme.html" class="outfit">
                    <section>
                        <div id="outfit-today">
                            OUTFIT
                        </div>

                        <div>

                        There are currently no clothes in your closet!
                        </div>

                        <div>
                            Click here to add clothes
                        </div>
                        <div>
                        </div>


                        asdfasdfasdf
                        asdfasdfasdf asdfasdfasdf asdfasdfasdf asdfasdfasdf asdfasdfasdf asdfasdfasdf asdfasdfasdf



                        asdfasdfasdfv

                        <div>
                        </div>
                        <div>
                        </div>

                    </section>  
                </a>

                <a href="https://calendar.google.com/calendar/r?pli=1" class="events">
                    <section>
                        <div id="events-today">
                            EVENTS
                        </div>

                        <span>
                            <h3 id="myDate">
                            </h3>
                        </span>

                        <div class="event-block">
                            <h4>DTC 1</h4>
                            <h5>9:30AM-10:50AM</h5>
                        </div>

                        <div class="event-block">
                            <h4>CS 330</h4>
                            <h5>1-1:50PM</h5>
                        </div>

                        <div class="event-block">
                            <h4>REHEARSAL</h4>
                            <h5>5-8PM</h5>
                        </div>
                    <!--
                    <div class="event-block">
                        <h4>DINNER W/ FRED</h4>
                        <h5>9-11PM</h5>
                    </div>

                    <div class="event-block">
                        <h4>REHEARSAL</h4>
                        <h5>9-11PM</h5>
                    </div>-->

                    
                    </section>
                </a>
            </div>
        </div>
    </div>

    <div class="app-footer">
        <ul>
            <li>
                <a href = "home.php" class="fas fa-home"></a>
                <p>HOME</p>
            </li>

            <li>
                <a href = "styleme.html" class="fas fa-tshirt"></a>
                <p>STYLEME</p>
            </li>

            <li id="closet-icon">
                <a href = "closet.html" class="fas fa-door-closed"></a>
                <p>CLOSET</p>
            </li>

            <li>
                <a href = "explore.html" class="fas fa-search"></a>
                <p>EXPLORE</p>
            </li>

            <li>
                <a href = "user.html" class="fas fa-user"></a>
                <p>ME</p>
            </li>           
        </ul>
    </div>

        <script src="home_newuser.js"></script>
</body>

</html>
