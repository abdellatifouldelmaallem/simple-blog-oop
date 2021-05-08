<?php

class login extends data {

   

    public function login($email, $password){

     if(!empty($email) && !empty($password)){

        $sql = $this->conn->prepare("SELECT * FROM admin WHERE email=? and password=?");
        $sql->bindParam(1, $email);
        $sql->bindParam(2, $password);
        $sql->execute();

        if($sql->rowCount() == 1){
                  
            header("location:page.table.php");
        }else{
              echo "<center><h1>your email or password not correct...</h1></center>";
        }


     }else{

      echo "<center><h1>empty...!you must fill the inputs  !</h1></center>";
     }

    }

}



?>