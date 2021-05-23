<?php

class mensaje extends Conexion{

public function add($form){

    $email = $form['email'];
    $pass = $form['password'];
    session_start();
    

    $consulta = "SELECT * FROM Usuarios where email= '$email' and pass='$pass'";
    $result = $this->conn->query($consulta);
    

   


    $filas = mysqli_num_rows($result);
    if($filas){
        $hola = mysqli_fetch_all($result);
        $_SESSION['id'] = $hola[0][0];
        $_SESSION['username'] = $hola[0][1];
    /*  return json_encode($filas) */;
    }else{
        return "no";
    }

    

    mysqli_free_result($result);
    mysqli_close($this->conn);
}

}




?>