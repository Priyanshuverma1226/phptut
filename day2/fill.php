<?php
require 'conn.php';

$username=$_POST['name'];
$email=$_POST['email'];

$check="SELECT * FROM `bg` where `email`='$email'";

$run_check=mysqli_query($conn,$check);

$row=mysqli_num_rows($run_check);

if ($row>=1) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Already
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

    # code...
}
else{


    $query="INSERT INTO `bg` (`s_no`, `username`, `email`, `date`) VALUES (NULL, '$username', '$email', current_timestamp());";
    
    $run=mysqli_query($conn,$query);
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> Done
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
    mysqli_close($conn);

?>