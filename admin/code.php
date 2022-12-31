<?php

session_start();
$connection = mysqli_connect("localhost","root","","adminpanel");


if(isset($_POST['registerbtn']))
{
    // Get data from post (register.php)
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
    
    if($password === $cpassword)
    {
      //Make Query
    $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
    // Run query
    $query_run = mysqli_query($connection, $query);

if($query_run)
{
//    echo "Saved";
    $_SESSION['success'] = "Admin Profile Added";
    header('Location: register.php');
}
else
{
//    echo "Not Saved";
    $_SESSION['status'] = "Admin Profile Not Added";
    header('Location: register.php');  
    }
}
else
{
    $_SESSION['status'] = "Password Dose Not Match";
    header('Location: register.php');
    }
}

//if(isset($_POST['registerbtn']))
//{
//    // Get data from post (addChapter.php)
//    $userName = mysqli_real_escape_string($connection, $_POST['username']);
//
//    
//    //Check duplicate
//    $checkDupUser = "SELECT register FROM username WHERE username = '$userName' ";
//    
//    $query = mysqli_query($connection, $checkDupUser);
//    $count = mysqli_num_rows($query);
//
//    
//    if($count > 0){
//        //    echo "Not Saved";
//    $_SESSION['status'] = "Chapter Already Exits";
//    header('Location: register.php');
//        return false;
//    }else{
////        make query
//        $query = "INSERT INTO register (username) VALUES ('$userName')";
////    // Run query
//    $query_run = mysqli_query($connection, $query);
////        mysqli_close($connection);
////        echo "Saved";
//    $_SESSION['success'] = "Chapter Added";
//    header('Location: register.php');
//        
//    }
//}
//mysqli_close($connection);

//// Edit Admin Profile
//if(isset($_POST['edit_btn'])){
//    $id = $_POST['edit_btn'];
//    $query = "SELECT * FROM register WHERE id='$id'";
//    $query_run = mysqli_query($connection, $query);
//}

if(isset($_POST['edit_btn'])){
//    $id = $_POST['edit_id'];
//    echo $id;
    $id = $_POST['edit_id'];
    echo $id;
}

?>