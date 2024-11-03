<?php
  // $con=mysqli_connect('localhost','root','','leavemanagementsystem');
  $con=mysqli_connect('bongoorv4swkd7byzchk-mysql.services.clever-cloud.com','uft30ubkujsxo1ep','9tHYJqHJR9cbEQHqu3kT','bongoorv4swkd7byzchk');
  mysqli_set_charset($con, 'UTF8');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $data = array();

      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql="SELECT * FROM employee WHERE email='$email' and password='$password'";
      $res=mysqli_query($con,$sql);

      $row = mysqli_fetch_array($res);

      if(isset($row) && $row != null){
          $data['msg'] = "Login success";
          $data['role'] = $row['role'];
          $data['name'] = $row['name'];
          $data['id'] = $row['id'];
          echo json_encode($data);
      }else{
          $data['msg'] = "Login fail";
          echo json_encode($data);
      }
  }
?>