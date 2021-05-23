<?php


class editar extends Conexion{

public function edituser(){

    $id=$_GET['id'];

$sql = "SELECT username, email, pass from Usuarios where id =$id";
$result = $this->conn->query($sql);

$array = [];
    while($row= mysqli_fetch_array($result)){
        $username=$row['username'];
        $email=$row['email'];
        $pass=$row['pass'];
        $array[] = array('username'=>$username, 'email'=>$email, 'pass'=>$pass);
    }


echo json_encode($array);

}


public function updateUser($form){

$user = $form["newname"];
$mail = $form["newmail"];
$pass = $form["newpass"];
$uid = $form['id'];


$sql = "UPDATE Usuarios set username='$user', email='$mail', pass='$pass' WHERE id =$uid";
$result = $this->conn->query($sql);


@session_start();
session_unset();
session_destroy();



echo json_encode($result);

}

















}


