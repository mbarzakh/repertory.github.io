<?php 
session_start();
include('inc/header.php');
include('inc/navbar.php');
?>
<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
<?php include('nav2.php'); ?>
<?php
// Edit Admin Profile
//if(isset($_POST['edit_btn'])){
//    $id = $_POST['edit_btn'];
//    $query = "SELECT * FROM register WHERE id='$id'";
//    $query_run = mysqli_query($connection, $query);
//}
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
<?php
include ('config.php');
            
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM register WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);


            }
            ?>
                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
        </div>
    </div>
</div>

</div>
<?php 
include('inc/scripts.php');
include('inc/footer.php');
?>