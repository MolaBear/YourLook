<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/login-style.css"/>
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<title>YourLook Login Page</title>

	<style>
		label {
			width: 100%;
			max-width: 100px;
			display: inline-block;
			text-align: right;
		}

		div {
			margin-top: 1em;
		}
	</style>

</head>

<body>
	<div class="login-containter">
		<form action="php/login.php" method="post">
		<div id="logo-header">
                <h2>YourLook</h2>
                <img class="logo" src="img/YourLook.jpeg" alt="YourLook Logo">
            </div>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'] ; ?> </p>
            <?php } ?>

            <div class="input-div" tabindex="0">
                <div class="i">
                    <!--<i class="fas fa-user"></i>-->
                </div>
                <div>
                    <label>
							<div class="login">
								Username
							</div>
						</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
            </div>

            <div class="input-div">
                <div class="i">
                    <!--<i class="fas fa-lock"></i>-->
                </div>
                <div>
                    <!--<h5>PASSWORD</h5>-->

                    <label>
							<div class="login">
								Password
							</div>
						</label>

                    <input type="password" name="password" placeholder="Password" required>
                </div>
            </div>

            <a href="demo.html"><u>FORGOT PASSWORD?</u></a>

            <input type="submit" class="btn" value="LOGIN">
            <div id="create-account">Don't have an account? </div>
            <a id="create" href="php/signup2.php">
                <u>Sign Up</u>
            </a>

        </form>
    </div>
</body>

</html>
