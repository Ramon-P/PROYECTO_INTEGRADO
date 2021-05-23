<?php

class mensaje extends Conexion{

    public function add($form)
    {  $user = $form['user'];  
       $email = $form['email'];
         $password=$form['password'];
         $vercode = 123 ;
         $verificar = $this->conn->query("SELECT * FROM Usuarios where email='$email'");
         if(mysqli_num_rows($verificar)>0){
           return 5;
           exit;
         }
         $sql = "INSERT INTO Usuarios (username,email, pass, vercode) VALUES ('$user', '$email', '$password', '$vercode')";
         $result= $this->conn->query($sql);
         
         return json_encode($result);

    }
    
       

}




