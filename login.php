<?php include './classes/class-db-con.php'?>
<?php include './classes/class-login.php';

$obj = new data();
    
    session_start();
   if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $test = new login();
    $test->login($email, $password);
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

   }
 ?>
                 
<?php include './templet/header.php' ?>



<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-1">     
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php include './templet/footer.php'?>