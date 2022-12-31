<?php
$connection = mysqli_connect("localhost","root","","rufac");
$query = "SELECT * FROM chapters";
$result = mysqli_query($connection,$query);
$chapCount = mysqli_num_rows($result);
?>      