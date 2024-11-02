<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page</title>
</head>
<body>
    <?php 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","product");
    // $query="SELECT * FROM `registration` WHERE email=`$email` AND  password=`$password`";
    $query = "SELECT * FROM `registration` WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$query);
    if($result){
       header('location:index.php');
    }else{
        header('location:animatedlogin.html');
    }
    ?>
    
</body>
</html>