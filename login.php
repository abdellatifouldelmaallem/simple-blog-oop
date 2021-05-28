<?php include './classes/class-db-con.php'?>
<?php include './classes/class-login.php';


    
    session_start();
   if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $test = new Auth();
    $test->login($email, $password);
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

   }
 ?>
                 
                 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="./templet/style.css"> -->
    <title>blog</title>
 <style>
     body {
    margin: 0;
    padding: 0;
    background-color: #B17F64;
    height: 100vh;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #F1DFD1;
   }  
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }

 </style>
  
  
</head>
<body>



<div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center ">Login</h3>
                            <div class="form-group">
                                <label for="username" class="">email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-1">     
                                <input type="submit" name="submit" class="btn btn-dark btn-md mt-3" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php include './templet/footer.php'?>