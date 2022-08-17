<?php

include "dbconn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"DELETE FROM `menu_form` WHERE category like 'breakfast'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:retrieve.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>