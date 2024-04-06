<!-- AdminIndexBackend.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborard</title>
    <link rel="stylesheet" href="AdminIndex.css">
</head>
<body style="position: relative;">
    <div class="header" id="header">
            <div class="logo">
                <a href="#">
                    <img src="../images/logo.png" alt="">
                </a>
            </div>  
            <div class="option">
                <ul class="links">
                    <li><a href="#product" id="first">Add Products</a></li>
                    <li><a href="#offproduct">Off products</a></li>
                    <li><a href="#viewall">View All</a></li>
                    <li><a href="#review">Reviews</a></li>
                </ul>
            </div>
            <div class="login">
                <button>Log Out</button>
            </div>
    </div>

    <div class="arrow" >
        <a href="#header"  style="height: 50px;width: 50px; background-color: black; border-radius: 50%;position: fixed;bottom: 50px;right: 40px;color: white; display: flex; align-items: center; justify-content: center;">U</a>
    </div>

    <div class="product" id="product">
        <h1>Add Product in database...</h1>
        <form action="product.php" method="post" enctype="multipart/form-data">
            
            <label for="name">Name </label> 
            <input type="text" id="name" name="name" placeholder="Enter the Name" ><br>

            <label for="information">information  </label>
            <input type="text" id="information" name="information" placeholder="Enter the information" ><br>

            <label for="price">Price  </label>
            <input type="number" id="price" name="price" placeholder="Enter the price" ><br>

            <label for="image" class="image">Upload an Image  </label><br>
            <input type="file" id="image" name="img" placeholder="upload the Image"><br>

            <input type="submit" name="submit" class="submit" value="Submit">

        </form>
    </div>

    <div class="viewAll" id="viewall">
        <h1>View all product details...</h1>
        <table style="border: 2px solid black;">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>info</th>
                <th>price</th>
                <th>Image</th>

            </tr>
            <?php
            $conn=mysqli_connect('localhost','root','','product');
            $sql="SELECT * FROM products";
            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0){
                
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $info=$row['info'];
                    $price=$row['price'];
                    $img=$row['img'];
                    echo"
                    <tr>
                        <td>".$id."</td>
                        <td>".$name."</td>
                        <td>".$info."</td>
                        <td>".$price."</td>
                        <td><img src=".$img."></td>
                    </tr>
                    ";
                }
            }else{
                echo"
                    <script>
                        window.alert('no More data in database.....');
                    </script>
                ";
            }
            
            mysqli_close($conn);
            ?>
        </table>
    </div>

    <div class="review" id="review">
        <h1>Company Reviews...</h1>
        <table style="border: 2px solid black;">
            <tr>
                <th>No</th>
                <th>Phone</th>
                <th>Name</th>
                <th>massage</th>

            </tr>
            <tr>
                <td>1</td>
                <td>Anand</td>
                <td>88888888</td>
                <td>good morning</td>
            </tr>
        </table>
    </div>

    <div class="product" id="offproduct">
        <h1>50% off product upload...</h1>
        <form action="">
            <label for="name">Name </label> 
            <input type="text" id="name" placeholder="Enter the Name"><br>

            <label for="information">information  </label>
            <input type="text" id="information" placeholder="Enter the information"><br>

            <label for="price">Price  </label>
            <input type="number" id="price" placeholder="Enter the price"><br>

            <label for="image" class="image">Upload an Image  </label><br>
            <input type="file" id="image" placeholder="upload the Image"><br>

            <input type="submit" class="submit" value="Submit">
        </form>
    </div>

</body>
</html>