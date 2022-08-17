<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => adnan
        $db = mysqli_connect("localhost", "root", "", "canteen");
          
        // Check connection
        if($db === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 10 values from the form data(input)
        $id = $_POST['id'];
        $itemname = $_POST['itemname'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO menu_form VALUES ('$id','$itemname', '$price','$category')";
          
        if(mysqli_query($db, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("'$id','$itemname', '$price','$category'");

        }
		else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db);
        }
          
        // Close connection
        mysqli_close($db);
        ?>
</body>
  
</html>