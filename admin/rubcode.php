<?php
session_start();
$connection = mysqli_connect("localhost","root","","rub");


if(isset($_POST['addRubBtn']))
{
    // Get data from post (addRubric.php)
    $rubName = $_POST['rubName'];
    $rubChap = $_POST['rubChap'];
    $rubCat = $_POST['rubCat'];
    

      //Make Query
    $query = "INSERT INTO tbl_rubs (RubricName,RubricChap,Category,) VALUES ('$rubName','$rubChap','$rubCat')";
    // Run query
    $query_run = mysqli_query($connection, $query);

if($query_run)
{
//    echo "Saved";
    $_SESSION['success'] = "Rubric Added";
    header('Location: addRubric.php');
}
else
{
//    echo "Not Saved";
    $_SESSION['status'] = "Rubric Not Added";
    header('Location: addRubric.php');  
    }
}


?>