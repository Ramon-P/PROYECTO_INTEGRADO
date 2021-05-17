<?php

class mensaje extends Conexion{

public function add($form){

    $email = $form['email'];
    $pass = $form['pass'];
    session_start();
    $_SESSION['email'] = $email;

    $consulta = "SELECT * FROM Usuarios where email= '$email' and pass='$pass'";
    $result = $this->conn->query($consulta);

    $filas = mysqli_num_rows($result);
    if($filas){
     return json_encode($filas);
    }else{
        echo("no");
    }

    mysqli_free_result($result);
    mysqli_close($this->conn);
}

}




?>