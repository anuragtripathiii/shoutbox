<?php
//connect mysql
$con=mysqli_connect("localhost","root","root","shoutit");
//test connection
if(mysqli_connect_errno()){
    echo 'failed to connect :'.mysqli_connect_error();
}
?>

