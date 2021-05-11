<?php


class bbdd extends Conexion{

public function lista()
{
    $sql = "SELECT * FROM Usuarios";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
        $rows = $result->fetch_all(MYSQLI_ASSOC);    
   }
    
   echo json_encode($rows);

    
}




}