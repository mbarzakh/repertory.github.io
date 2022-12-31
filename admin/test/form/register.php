<?php
//    if(isset($_POST['add_user_submit'])){
//        $username = mysqli_real_escape_string($connection, $_POST['username']);
//        
//        $email = mysqli_real_escape_string($connection, $_POST['email']);
//        
//        $password = mysqli_real_escape_string($connection, $_POST['password']);
//        
//        $insert_user_q = "INSERT INTO users(
//        
//        username,
//        email,
//        password
//        )VALUES(
//        '$username'
//        '$email'
//        '$password'
//        
//        )";
//        
//        mysqli_query($connection, $insert_user_q);
//    }


if(isset($_POST['submit_data']))
{
 $host="localhost";
 $username="root";
 $password="";
 $databasename="test";
 $connect=mysqli_connect($host,$username,$password);
 $db=mysqli_select_db($connect, $databasename);	 

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
	
 $get_user=mysqli_query($connect, "select * from users where username='$name',email='$email' and password='$pass'");
 if(mysqli_num_rows($get_user)>0)
 {
  echo "Details Are Already Submitted";
 }
 else
 {
  mysql_query("INSERT INTO users VALUES('$name','$email','$pass')");
  header("location:index.php");
 }
}

?>