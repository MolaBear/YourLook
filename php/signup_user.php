
<!DOCTYPE html>
<html>
<head>
 <title>signup user page</title>
</head>
<body>

 <?php
    $conn = mysqli_connect("localhost:3307", "root", "", "yourlook"); 
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }
    
    if(isset($_POST['username']) && isset($_POST['email'])
        &&isset($_POST['phone']) && isset($_POST['password'])
        &&isset($_POST['password2']) && isset($_POST['gender'])
    )
    {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname=validate($_POST['username']);
    $email=validate($_POST['email']);
    $phone=validate($_POST['phone']);
    $pass=validate($_POST['password']);
    $pass2=validate($_POST['password2']);
    $gender=validate($_POST['gender']);
    
    $sql = "INSERT INTO yourlook . users VALUES ('$id','$uname', '$email', '$phone', '$pass', '$gender')";
    
    if (mysqli_query($conn, $sql)) {
    header("Location: signup2.php?success=Your account has been created successfully");
    exit();
    }else {
    header("Location: reg.php?error=unknown error occurred");
    exit();
    }
    }
    // Close connection
    mysqli_close($conn);
 ?>
 
</body>
</html>