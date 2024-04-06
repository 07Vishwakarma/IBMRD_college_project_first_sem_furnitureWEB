<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $info=$_POST['information'];
        $price=$_POST['price'];
        $img=$_FILES['img'];
        $imgname=$img['name'];
        $imgerror=$img['error'];
        $imgtemp=$img['tmp_name'];

        $ImageSeparated=explode('.',$imgname);
        $file=strtolower(end($ImageSeparated));
        print_r($ImageSeparated);
        $file=$ImageSeparated[1];
        $extension=array('jpg','jpeg','png');

        if(in_array($file,$extension)){
            $uploadedimg="imagesFolder/".$imgname;
            move_uploaded_file($imgtemp,$uploadedimg);
            
            $conn=mysqli_connect('localhost','root','','product');
            print_r($img);
            $query="INSERT INTO `products`(name,info,price,img)VALUES('$name','$info','$price','$uploadedimg.')";
            $result=mysqli_query($conn,$query);
            // if($result){
                // echo"success full";
            // }else{
                // die(mysqli_error($conn));
            // }
        }


        print_r($img);
        echo"<br>";
        print_r($imgname);
        echo"<br>";
        print_r($imgerror);
        echo"<br>";
        print_r($imgtemp);
        echo"<br>";
    }
    mysqli_close($conn);
    
    ?>
    <h1>hellow</h1>
</body>
</html>