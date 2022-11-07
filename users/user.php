<?php
 session_start();
 if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['gender'])){
 
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
        <link rel="stylesheet" href="css/profile_style.css" />

        <?php }else{?>

            <link rel="stylesheet" href="css/profile_style2.css" />

        <?php
        }
        ?>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>User Profile </title>
</head>

<body onload="initialLoading()">

    <!-- wrap around everything except footer b/c we want footer to be sticky-->
    <div class="content">
        <header class="app-header">
            <div class="container">

                <h1>Profile</h1>


            </div>
        </header>
        <div class="header" id="myHeader">
            <div class="rounded_circle">
                <img src="img/YourLook.jpeg" width="194px" height="194px">
            </div>

            <h1>Hello <?php echo $_SESSION['username']; ?></h1>
        </div>

        <body>
            <div class='text'>
                <div class='settings'>
                    <p>Location Preferences</p>
                    <div class="right_icon">
                        <a href="demo.html" class="fas fa-chevron-right" style="text-decoration: none; color: white;"></a>
                    </div>

                </div>
                <div class='settings'>
                    <p>Account Settings</p>
                    <div class="right_icon">
                        <a href="demo.html" class="fas fa-chevron-right" style="text-decoration: none; color: white;"></a>
                    </div>
                </div>
                <div class='settings'>
                    <p>Logout</p>
                    <div class="logout_icon">
                        <a href="logout.php" class="fas fa-sign-out-alt" style="text-decoration: none; color: white;"></a>
                    </div>
                </div>
            </div>
            <script src="js/script.js"></script>
        </body>
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

            <li id="user-icon">
                <a href="user.php" class="fas fa-user"></a>
                <p>Me</p>
            </li>
        </ul>
    </div>
</body>

</html>

<?php
}else{
 header("Location:/YourLook/users/demo.html");
 exit();
 }
 ?>