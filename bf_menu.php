<!DOCTYPE html>
<html>
<head>
  <title>Display breakfast from Database</title>
</head>
<link rel="stylesheet" type="text/css" href="form_style.css">
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
    <h1 style="color:black;">AVAILABLE BREAKFAST</h1>
    <table border="2">
      <thead style="background-color:grey ; color:white;">
        <tr>
          <td>id</td>
          <td>itemname</td>
          <td>price</td>
          <td>category</td>
          
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
          
        
     </tbody>
<?php
    }
?>
</table>
<br>
<ul>
<li><a href="student_home.html">HOME</a></li>
    <li><a href="bf_menu.php">BREAKFAST </a></li>
    <li><a href="lunch_menu.php">LUNCH</a></li>
    <li><a href="snacks_menu.php">SNACKS</a></li>
    <li><a href="ice_menu.php">ICE-CREAMS </a></li>
    <li><a href="drinks_menu.php">DRINKS</a></li>
    <!--<li><a href="...">MY PROFILE</a></li>-->
    <li><a href="new-password.php">CHANGE PASSWORD</a></li>
    <li><a href="about.html">ABOUT US</a></li>
    <li><a href="logout.php">LOGOUT</a></li><br>
      </ul>

</body>
</html>