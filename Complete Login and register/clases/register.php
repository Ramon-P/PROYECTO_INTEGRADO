<?php

class mensaje extends Conexion{

    public function add($form)
    {  $user = $form['user'];  
       $email = $form['email'];
         $password=$form['password'];
         $vercode = Misc::num();
         $verificar = $this->conn->query("SELECT * FROM Usuarios where email='$email'");
         if(mysqli_num_rows($verificar)>0){
           return 5;
           exit;
         }
         
         $sql = "INSERT INTO Usuarios (username,email, pass, vercode) VALUES ('$user', '$email', '$password', '$vercode')";
         $result= $this->conn->query($sql);
         /*  $sql = $this->conn->prepare("INSERT INTO usuarios (username,email, pass, vercode) VALUES (?,?,?,?)");
         $sql->bind_param("isss", $user, $email, $password, $vercode);
         $sql->execute(); */
         
         return json_encode($result);

    }
    
       

}




