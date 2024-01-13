
<?php
include 'connect.php';
session_start();
if(isset($_SESSION["login"])){
    header('Location: dashboard.php');}

if($_SERVER['REQUEST_METHOD']=='POST'){

  $login = $_POST['login'];
  $passw = $_POST['passw'];
  $hashedPassw =sha1($passw);
  //check lw fe aldatabase
  $stmt = $con->prepare("SELECT user_id,login,passw,points FROM users Where login=? AND passw=?");
  $stmt->execute(array($login,$hashedPassw));
  $row = $stmt->fetch();
  $count =$stmt->rowCount();

if($count> 0){
  header('Location: dashboard.php');
}
else{
  echo "There No Account with that record";
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="signup.html">
    <title>Login</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box">
                      <h1 style="color:red">username:user<hr>password:user</h1>
                        <h2>Login</h2>
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                          <div class="user-box ">
                            <input type="type" class="UserEmail" name="login" required="">
                            <label>Email</label>
                          </div>
                          <div class="user-box">
                            <input type="password" name="passw" class="UserPass" required="">
                            <label>Password</label>
                          </div>
                          <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Login
                          </button>

                          <p class="mt-5 text-white">Don't Have An account?</p>
                          <span class="text-white"><a href="./signup.html" class="link-other">Sign Up</a></span>
                          
                        </form>
                      </div>
                      
                </div>
               
            </div>
        </div>
    </div>
    <!-- <section id="welcome" class="bg-dark w-100 vh-100 text-white d-block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center mt-5">Welcom</h1>
            <button type="button" class="loGout btn btn-danger">Log Out</button>
          </div>
        </div>
      </div>
    </section> -->
    <script src="js/anime.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
