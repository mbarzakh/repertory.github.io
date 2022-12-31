


<?php 
session_start();
include('inc/header.php');
include('inc/navbar.php');
?>
        

      

  
            
            
            
            <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label for="validationDefault01">Username</label>
                <input type="text" name="username" id="validationDefault01" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary ml-2 float-right" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h4>
  </div>

  <div class="card-body">

      
      <?php
      if(isset($_SESSION['success']) && $_SESSION['success'] !='')
      {
          echo '<h2> '.$_SESSION['success'].' </h2>';
          unset($_SESSION['success']);
      }
      
      
      
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
          echo '<h2 class="bg-info"> '.$_SESSION['status'].' </h2>';
          unset($_SESSION['status']);
      }
      ?>
      
      
      
      
    <div class="table-responsive">

<?php
        $connection = mysqli_connect("localhost","root","","adminpanel");
        $query = "SELECT * FROM register";
        $query_run = mysqli_query($connection, $query);
        
?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                   ?>
            
         
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                
                
                <form action="registerEdit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php $row['id']?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
           <?php
                }
            }
            else{
                echo "No record found";
            }
            ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
            
            
       </div>
            <!-- End of Main Content -->
<?php 
include('inc/scripts.php');
include('inc/footer.php');
?>

    

   