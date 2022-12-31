


<?php 
session_start();
include_once('inc/header.php');
include_once('inc/navbar.php');
include_once('topbar.php');
include_once('addrubmodel.php');
include_once('inc/countChap.php');

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm disabled" aria-disabled="true">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        
        
        
    </div>
    
</div> <!-- /.container-fluid -->





<!--        </div>-->
<!-- End of Content Wrapper -->
<!-- Model Replace from here to include -->

<div class="container-fluid">

<!-- Chapter Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-1 font-weight-bold text-primary">
                Add Chapter
            
     

            <a href="#" class="btn btn-success float-right">
<!--            <a href="#" class="btn btn-outline-primary float-right">-->
  Total&nbsp;&nbsp;<span class="badge badge-light"><?php echo($chapCount);?></span>
</a>
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


<!-- Add Chapter -->
<form id="addChap" action="rcode.php" method="POST">
<div class="form-group">
<input type="text" name="addChap" id="validationDefault01" class="form-control" placeholder="Enter Chapter Name..." required>
</div>
<button type="submit" name="addChapBtn" class="btn btn-primary btn-block">Add Chapter</button>
<!--
<div class="modal-footer">
<button type="submit" name="addChapBtn" class="btn btn-primary btn-block">Add Chapter</button>
</div>
-->
</form>

<hr>
<!-- Display Data -->      
<div class="table-responsive">

<?php
$connection = mysqli_connect("localhost","root","","rufac");
//$query = "SELECT * FROM rubChapList ORDER BY rubChapList";
$query = "SELECT * FROM chapters ORDER BY chapName";
$query_run = mysqli_query($connection, $query);

?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th> Chapter Name </th>
    
    
    
    
    
    
    
    
<th> <div style="float:left;">Chapter Translation</div> <div style="float:right;">ترجمہ</div>  </th>
<!--<th> <div style="float:left;width:50%;">Chapter Translation</div> <div style="float:right;">ترجمہ</div>  </th>-->
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
<!--
<td><?php// echo $row['RubricID']; ?></td>
<td><?php// echo $row['RubricName']; ?></td>
<td><?php// echo $row['RubricChap']; ?></td>
<td><?php //echo $row['Category']; ?></td>

-->
<td><?php echo $row['chapName']; ?></td>
    <td><div style="float:right;"><?php echo $row['chapTrans']; ?></div></td>
<td>
<form action="" method="post">
<input type="hidden" name="edit_id" value="">
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
//echo "No record found";
echo '<hr><div class="alert alert-warning mt-3" role="alert">
  <h4 class="alert-heading">No Records are found!</h4>
  <hr>
  <p class="mb-0"><a class="btn btn-primary" href="contactUs" role="button">Contact Us</a></p>
</div>';
}
?>
</tbody>
</table>

</div> <!-- Table Responsive -->
</div> <!-- Card Body -->
</div> <!-- Card Shadow -->


</div>
<!-- End of Main Content -->
<?php 
include('inc/scripts.php');
include('inc/footer.php');
?>



