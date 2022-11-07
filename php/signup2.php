<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="/YourLook/css/signup2.css"/>
    <link rel="stylesheet" href="/YourLook/fontawesome-free-5.12.1-web/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Sweather Signup Page</title>


</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/YourLook/index.php" class="fas fa-chevron-left"></a>
            <h2>CREATE ACCOUNT</h2>
        </div>
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'] ; ?> </p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <form method="post" action='signup_user.php' method="post" id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" id="username" name="username"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="example@example.com" id="email" name="email"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="phone">Phone</label>
                <input type="phone" placeholder="0000000000" id="phone" name="phone"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" name="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Reenter Password</label>
                <input type="password" placeholder="Confirm Password" id="password2" name="password2"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div id="radio-form" class="form-control">
                <label for="username">Gender</label>
                <div id="radio-boxes">
                    <input class="radio-input" type="radio" id="male" name="gender" value="male">
                        <label class="radio-label">Male</label>
                    </input>
                    
                    <input class="radio-input" type="radio" id="female" name="gender" value="female">
                        <label class="radio-label">Female</label>
                    </input>
                    
                
                    <input class="radio-input" type="radio" id="other" name="gender" value="other">
                        <label class="radio-label">Other</label>
                    </input>
                </div>
                
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small id="gender-error">Error message</small>
            </div>
            
            <input class="submit-button" type="submit" value="Sign Up">
        </form>
    </div>

    <script src="/YourLook/js/signup2.js"></script>
</body>
</html>