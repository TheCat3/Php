<?php
session_start();
$noNavbar = '';
if(isset($_SESSION['admin_user'])){
  header('Location: members.php'); //redirect to dashboard
}
include "connect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $hashedPass =sha1($password);

  //check lw fe aldatabase
  $stmt = $con->prepare("SELECT user_id,username,password FROM admin_user Where username=? AND password=?");
  $stmt->execute(array($username,$hashedPass));
  $row = $stmt->fetch();
  $count =$stmt->rowCount();
  // check lw alcount m4 0
  if ($count >0) {
    $_SESSION['username']=$username; //register session name
    header('Location: members.php'); //redirect to dashboard
    exit();
    // code...
  }
}
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off"/>
<input class="form-control" type="password" name="pass" placeholder="password" autocomplete="new-password"/>
<input class="btn btn-primary btn-block" type="submit" value="Login"/>

</form>
