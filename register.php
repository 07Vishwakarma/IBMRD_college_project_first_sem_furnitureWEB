<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
</head>
<body>
    <?php 
    if($_POST['submit']){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sellerorbuyer=$_POST['sellerorbuyer'];
    $query="INSERT INTO `registration`(name,email,password,buyseller	
    )VALUES('$name','$email','$password','$sellerorbuyer.')";
    $conn=mysqli_connect("localhost","root","","product");
    $result=mysqli_query($conn,$query);
    if($query){
       header('location:animatedlogin.html');
    }else{
        header('location:animatedlogin.html');
    }
}else{
    echo"some thing error";
}
    ?>
    
</body>
</html>