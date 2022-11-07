<?php
 session_start();
 if (isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['gender'])){
    include "ImgSend.php";
 
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
        <link rel="stylesheet" href="css/style.css" />

        <?php }else{?>

            <link rel="stylesheet" href="css/style2.css" />

        <?php
        }
        ?>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>YourLook Closet Page</title>
</head>

<body onload="initialLoading()">

    <!-- wrap around everything except footer b/c we want footer to be sticky-->
    <div class="content">
        <header class="app-header">
            <div class="container">
                <div class="toggle-btn" onClick="openNav()">
                    <i class="fas fa-filter"></i>
                </div>
                <h1>Closet</h1>


            </div>
        </header>
    </div>

    <div id="filter-bar">
        <ul>
            <div class="filter-content">
                <header class="filter-header">
                    <div class="filter-container">
                        <h2>Mix 'n Match</h2>
                    </div>
                </header>
            </div>

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <br>
            <div class="criteria-block">
                <h3>Categories</h3>
                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="tops" name="category" value="tops">
                    <label for="tops">Tops</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="pants" name="category" value="pants">
                    <label for="pants">Pants</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="shorts" name="category" value="shorts">
                    <label for="shorts">Shorts</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="outerwear" name="category" value="outerwear">
                    <label for="outerwear">Outerwear</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="sweaters" name="category" value="sweaters">
                    <label for="sweaters">Sweaters</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="hoodies" name="category" value="hoodies">
                    <label for="hoodies">Hoodies</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="shoes" name="category" value="shoes">
                    <label for="shoes">Shoes</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="bags" name="category" value="bags">
                    <label for="bags">Bags</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="dresses" name="category" value="dresses">
                    <label for="dresses">Dresses</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="skirts" name="category" value="skirts">
                    <label for="skirts">Skirts</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectCategories()" class="category" id="accessories" name="category" value="accessories">
                    <label for="accessories">Accessories</label>
                </div>
            </div>

            <br>
            <hr>

            <br>
            <div class="criteria-block">
                <h3>Colour Sets</h3>
                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="black" name="color" value="black">
                    <label for="black">Black</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="white" name="color" value="white">
                    <label for="white">White</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="grey" name="color" value="grey">
                    <label for="grey">Grey</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="blue" name="color" value="blue">
                    <label for="blue">Blue</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="red" name="color" value="red">
                    <label for="red">Red</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="pink" name="color" value="pink">
                    <label for="pink">Pink</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="purple" name="color" value="purple">
                    <label for="purple">Purple</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="green" name="color" value="green">
                    <label for="green">Green</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="yellow" name="color" value="yellow">
                    <label for="yellow">Yellow</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="orange" name="color" value="orange">
                    <label for="orange">Orange</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectColors()" class="color" id="brown" name="color" value="brown">
                    <label for="brown">Brown</label>
                </div>
            </div>
            <br>
            <hr>

            <br>

            <div class="criteria-block">
                <h3>Seasons</h3>
                <div>
                    <input type="checkbox" onclick="selectSeasons()" class="season" id="fall" name="season" value="fall">
                    <label for="fall">Autumn</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectSeasons()" class="season" id="winter" name="season" value="winter">
                    <label for="winter">Winter</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectSeasons()" class="season" id="spring" name="season" value="spring">
                    <label for="spring">Spring</label>
                </div>

                <div>
                    <input type="checkbox" onclick="selectSeasons()" class="season" id="summer" name="season" value="summer">
                    <label for="summer">Summer</label>
                </div>
            </div>
        </ul>

        <div class="filter-btns">
            <div id="reset-btn">
                <button type="button" onclick="resetFilter()">
                    Reset
                </button>
            </div>
            <div id="apply-btn">
                <button type="button" onclick="applyFilter()">
                    Apply
                </button>
            </div>
        </div>
    </div>



    <style>
        
        
      
    </style>


    <div class="container">

        <div class="middle">
                <input type="submit" name="submit" class="submit-fit" >
        </div>
    </div>




    <div id="grid">
        <div id="wrapper">
            <div class="add-panel">
                <form method="post" enctype="multipart/form-data">
                <label for="ImagePass">
                <i class="fas fa-plus" style="font-size: 24px;
                                            padding: 80px;
                                            cursor:pointer;">
                                            </i></label>
                <input type="file" name="file" id="ImagePass" style="display:none; visibility:none;">
                
                </form>
            </div>
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
    <script src="js/filter.js"></script>
    
    <?php }else{?>

        <script src="js/filter2.js"></script>

    <?php
    }
    ?>
</body>

</html>

<?php
 }else{
 header("Location:/YourLook/users/demo.html");
 exit();
 }
 ?>