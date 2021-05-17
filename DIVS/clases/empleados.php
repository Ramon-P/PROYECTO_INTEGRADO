<?php


class bbdd extends Conexion{

public function lista()
{
    $sql = "SELECT * FROM Notas where idtable=4";
    $result = $this->conn->query($sql);

   $array = [];
    while($row= mysqli_fetch_array($result)){
        $idnota=$row['idnota'];
        $tittle=$row['tittle'];
        $text=$row['text'];
        $idtable=$row['idtable'];
        $array[] = array('idnota'=>$idnota, 'tittle'=>$tittle, 'text'=>$text, 'idtable'=>$idtable);
    }
    
   echo json_encode($array);

}




}