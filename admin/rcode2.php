<?php
session_start();
$connection = mysqli_connect("localhost","root","","adminpanel");
// Add Admin
//if(isset($_POST['addAdminBtn']))
//{
//    // Get data from post (reg.php)
//    $chapName = mysqli_real_escape_string($connection, $_POST['userName']);
//
//    
//    //Check duplicate
//    $checkDupChap = "SELECT username FROM register WHERE username = '$chapName' ";
//    
//    
//    $result = mysqli_query($connection, $checkDupChap);
//    $count = mysqli_num_rows($result);
//    
//    if($count > 0){
//        //    echo "Not Saved";
//    $_SESSION['status'] = "Chapter Already Exits";
//    header('Location: reg2.php');
//        return false;
//    }else{
////        make query
//        $query = "INSERT INTO register (username) VALUES ('$chapName')";
////    // Run query
//    $query_run = mysqli_query($connection, $query);
////        mysqli_close($connection);
////        echo "Saved";
//    $_SESSION['success'] = "Chapter Added";
//    header('Location: reg2.php');
//        
//    }
//}
//mysqli_close($connection);

if(isset($_POST['addAdminBtn']))

//if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get data from post (addChapter.php)
    $uName = mysqli_real_escape_string($connection, $_POST['username']);
// Validate Username
//    if($uName == '' || empty($uName)){
//        echo ("<h1>Blank</h1>");
//        return false;
//    }
    // Email 
        $uEmail = mysqli_real_escape_string($connection, $_POST['email']);
    
    //password
    $uPass = mysqli_real_escape_string($connection, $_POST['password']);
    //confirm pass
    $uConPass = mysqli_real_escape_string($connection, $_POST['confirmpassword']);

    if($uPass === $uConPass){
        
    
    
    //Check duplicate
    $checkDupUname = "SELECT username FROM register WHERE username = '$uName'";
    
    
    $result = mysqli_query($connection, $checkDupUname);
    $count = mysqli_num_rows($result);
    } // added this 11-02-2021 6-57
    if($count > 0){
        //    echo "Not Saved";
    $_SESSION['status'] = "User Already Exits";
    header('Location: reg.php');
        return false;
    }
//        // Check Email Duplication
//        $uEmail = mysqli_real_escape_string($connection, $_POST['email']);

    //Check duplicate
    $checkDupEmail = "SELECT email FROM register WHERE email = '$uEmail' ";
    
    $result = mysqli_query($connection, $checkDupEmail);
    $count = mysqli_num_rows($result);
    
    if($count > 0){
        //    echo "Not Saved";
    $_SESSION['status'] = "Email Already Exits";
    
    header('Location: reg.php');
        return false;        
    
    }else{
//         //password
//    $uPass = mysqli_real_escape_string($connection, $_POST['password']);
// Hash Password
    $options = array("cost"=>16);
    $hashPassword = PASSWORD_HASH($uPass,PASSWORD_BCRYPT,$options);
        
        
        //make query
        $query = "INSERT INTO register (username, email, password) VALUES ('$uName','$uEmail','$hashPassword')";
//    // Run query
    $query_run = mysqli_query($connection, $query);
//        mysqli_close($connection);
//        echo "Saved";
    $_SESSION['success'] = "User Added";
    header('Location: reg.php');
        
    }
   

}
mysqli_close($connection);
?>