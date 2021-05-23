<?php


class tablero extends Conexion{


public function insertTableName(){

    $userid  =$_GET['userid'] ; 
    $nombre = $_GET['nombre'];

    if(strlen($nombre)>0){

        $sql = "INSERT INTO Tablero (userid, nombre) VALUES ($userid,'$nombre')" ;
        echo $sql;
        $result = $this->conn->query($sql);
    
        
       return json_encode($result);


    }else{
        return "cAZURRO";
    }

  

}



}