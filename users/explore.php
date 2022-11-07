<?php
 session_start();
 if (isset($_SESSION['id']) && isset($_SESSION['username'])&& isset($_SESSION['gender'])){
 
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
        <link rel="stylesheet" href="css/explore_style.css" />

        <?php }else{?>

            <link rel="stylesheet" href="css/explore_style2.css" />

        <?php
        }
        ?>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>YourLook Explore Page</title>
</head>

<body onload="initialLoading()">

    <div class="content">
        <header class="app-header">
            <div class="container">
                <div id="cont-explore">
                    <h1>Explore</h1>
                </div>
                <!-- <h3>FILTER</h3> -->
            </div>
        </header>
    </div>

    <div class="grid_container">
        <div id="search-input">
            <input type="text" id="search" placeholder="Search here">
        </div>

        <div class="item">
            <a href="https://za.shein.com/">
                <div class="headline">
                    Explore more clothes from Shien
                </div>
            </a>
        </div>

        <div class="item2">
            <a href="https://www.instagram.com/">
                <div class="headline">
                    Share outfits with your friends on Instagram!
                </div>
            </a>
        </div>

        <div class="item">
            <a href="https://www.thebalancecareers.com/best-interview-attire-for-every-type-of-interview-2061364">
                <div class="headline">
                    The Best Outfits for Job Interviews
                </div>
            </a>
        </div>



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

            <li id="explore-icon">
                <a href="explore.php" class="fas fa-search"></a>
                <p>Explore</p>
            </li>

            <li>
                <a href="user.php" class="fas fa-user"></a>
                <p>Me</p>
            </li>
        </ul>
    </div>

    <script src="js/explore.js"></script>
</body>

</html>

<?php
}else{
 header("Location:/YourLook/users/demo.html");
 exit();
 }
 ?>