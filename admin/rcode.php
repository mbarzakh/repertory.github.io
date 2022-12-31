<?php
session_start();
//$connection = mysqli_connect("localhost","root","","filter");
$connection = mysqli_connect("localhost","root","","rufac");

//Add Rubrics
if(isset($_POST['addRubBtn']))
{
    // Get data from post (addRubric.php)
    $rubName = mysqli_real_escape_string($connection, $_POST['rubName']);
    $rubChap = mysqli_real_escape_string($connection, $_POST['rubChap']);

//    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
//$name_error = "Name must contain only alphabets and space";
//}
      //Make Query
    $query = "INSERT INTO rubrics (name,chapter,Category) VALUES ('$rubName','$rubChap','$rubCat')";
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
//
//// Add Chapter
//if(isset($_POST['addChapBtn']))
//{
//    // Get data from post (addRubric.php)
//    $chapName = $_POST['addChap'];
//    {
//      //Make Query
//    $query = "INSERT INTO rubChapList (rubChapList) VALUES ('$chapName')";
//    // Run query
//    $query_run = mysqli_query($connection, $query);
//
//if($query_run)
//{
////    echo "Saved";
//    $_SESSION['success'] = "Chapter Added";
//    header('Location: addChapter.php');
//}
//else
//{
////    echo "Not Saved";
//    $_SESSION['status'] = "Chapter Not Added";
//    header('Location: addChapter.php');  
//    }
//}
//}

//
// Add Chapter
//if(isset($_POST['addChapBtn']))
//{
//    // Get data from post (addChapter.php)
//    $chapName = mysqli_real_escape_string($connection, $_POST['addChap']);
//
//    
//    //Check duplicate
//    $checkDupChap = "SELECT rubchapList FROM rubChapList WHERE rubChapList = '$chapName' ";
//    
//    
//    $result = mysqli_query($connection, $checkDupChap);
//    $count = mysqli_num_rows($result);
//    
//    if($count > 0){
//        //    echo "Not Saved";
//    $_SESSION['status'] = "Chapter Already Exits";
//    header('Location: addChapter.php');
//        return false;
//    }else{
////        make query
//        $query = "INSERT INTO rubChapList (rubChapList) VALUES ('$chapName')";
////    // Run query
//    $query_run = mysqli_query($connection, $query);
////        mysqli_close($connection);
////        echo "Saved";
//    $_SESSION['success'] = "Chapter Added";
//    header('Location: addChapter.php');
//        
//    }
//}
//mysqli_close($connection);

// Add Chapter
if(isset($_POST['addChapBtn']))
{
    // Get data from post (addChapter.php)
    $chapName = mysqli_real_escape_string($connection, $_POST['addChap']);

    
    //Check duplicate
    //Variable =     "SELECT (row) FROM (tabel) WHERE (row)
    $checkDupChap = "SELECT chapName FROM chapters WHERE chapName = '$chapName' ";
    
    
    $result = mysqli_query($connection, $checkDupChap);
    $count = mysqli_num_rows($result);
    
    if($count > 0){
        //    echo "Not Saved";
    $_SESSION['status'] = "Chapter Already Exits";
    header('Location: addChapter.php');
        return false;
    }else{
//        make query
        $query = "INSERT INTO chapters (chapName) VALUES ('$chapName')";
//    // Run query
    $query_run = mysqli_query($connection, $query);
//        mysqli_close($connection);
//        echo "Saved";
    $_SESSION['success'] = "Chapter Added";
    header('Location: addChapter.php');
        
    }
}
mysqli_close($connection);




