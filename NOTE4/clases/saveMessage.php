<?php

class mensaje extends Conexion{

    public function add($form)
    {  $user = $form['user'];  
       $email = $form['email'];
         $password=$form['password'];
         $vercode = '123';
         $sql = "INSERT INTO Usuarios (username,email, pass, vercode) VALUES ('$user', '$email', '$password', '$vercode')";
         $result= $this->conn->query($sql);
          


         
         
         
         /*  $sql = $this->conn->prepare("INSERT INTO usuarios (username,email, pass, vercode) VALUES (?,?,?,?)");
         $sql->bind_param("isss", $user, $email, $password, $vercode);
         $sql->execute(); */
         
         return json_encode($result);

    }
    
       

}




