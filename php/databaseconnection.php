<?php
$con =new mysqli("localhost",'root' , '', 'nour_db');

if(!$con){
    die(mysqli_error($con));
}

?>