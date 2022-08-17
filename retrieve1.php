<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cafeteria Menu</title>
  </head>
  <style> 
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #111;
  }
    
    </style>
  <body>
<ul>        
<li><a href="admin_home.html">Home</a></li>
<li><a href="menuform.html">MENU UPDATION</a></li>
<li><a href="null">Contact us</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
<h1 style="color:black;"><center>AVAILABLE BREAKFAST</center></h1>
    <table  class="table table-striped">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Delete</td>
         </tr>
</thead>
      
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"SELECT * FROM `menu_form` WHERE `category` LIKE 'breakfast'"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>

<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
     </tr> 
        
     </tbody>
<?php
    }
?>
</table>
<br>
<h1 style="color:black;"><center>AVAILABLE LUNCH ITEMS</center></h1>
    <table class="table table-striped">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Delete</td>
         </tr>
</thead>
    <!--lunch retrieval-->
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"SELECT * FROM `menu_form` WHERE `category` LIKE 'lunch'"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>
<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
     </tr> 
        
     </tbody>
<?php
    }
?>
</table>
<br>
  <!--snacks retrieval-->
  <h1 style="color:black;"><center>AVAILABLE SNACKS</center></h1>
    <table class="table table-striped">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Delete</td>
         </tr>
</thead>
      
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"SELECT * FROM `menu_form` WHERE `category` LIKE 'snacks'"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>
<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
     </tr> 
        
     </tbody>
<?php
     }
?>
</table>
<br>
<!--drinks retrieval-->
<h1 style="color:black;"><center>AVAILABLE SOFTDRINKS</center></h1>
    <table class="table table-striped">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Delete</td>
         </tr>
</thead>
      
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"SELECT * FROM `menu_form` WHERE `category` LIKE 'softdrinks'"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>
<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
     </tr> 
        
     </tbody>
<?php
    }
?>
</table>
<br>
<!--icecreams retrieval-->
<h1 style="color:black;"><center>AVAILABLE ICE-CREAMS</center></h1>
    <table class="table table-striped">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          <td>Delete</td>
         </tr>
</thead>
      
    <?php 
    include "dbconn.php"; //database connection 

      
     $records = mysqli_query($db,"SELECT * FROM `menu_form` WHERE `category` LIKE 'icecreams'"); // fetch data from database
     
     while($data = mysqli_fetch_array($records))
     {
?>
<tbody style="background-color:whitesmoke;">
 <tr>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['itemname'];?></td>
         <td><?php echo $data['price'];?></td>
         <td><?php echo $data['category'];?></td>
         <td><a href="delete.php?id=<?php echo $data['id']; ?>"  style="background-color:grey ; color:white;" >Delete</a></td>
     </tr> 
        
     </tbody>
<?php
    }
?>
</table>
<br>



</body>
</html>



</body>