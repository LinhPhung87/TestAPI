<?php
    ob_start();
    session_start();
    $con=mysqli_connect('localhost','root','','leavemanagementsystem');
    mysqli_set_charset($con, 'UTF8');
?>