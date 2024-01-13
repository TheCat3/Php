<?php
include 'navbar.php';
include 'connect.php';
session_start();
if(isset($_SESSION['username'])){
 //redirect to dashboard
}
else {
  header('Location:empty');
}


$stmt = $con->prepare("SELECT * FROM users");
$stmt->execute(array());
$row = $stmt->fetchAll();
$count =$stmt->rowCount();


?>


<title>Members</title>

<h1 class="text-center">Members</h1>
<div class="container">
  <div class="table-responsive">
    <table class="main-table text-center table table-bordered">
      <tr>
        <td>Username</td>
        <td>Email</td>
        <td>PUC</td>
        <td>Ip</td>
      </tr>
        <?php foreach ($row as $row){
          echo "<tr>";
          echo "<td>".$row['login'] ."</td>";
          echo "<td>".$row['email'] ."</td>";
          echo "<td>".$row['points'] ."</td>";
          echo "<td>".$row['ip_address'] ."</td>";
          echo "</tr>";
          // code...
        }




 ?>
