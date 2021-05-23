<?php


class bbdd extends Conexion{

public function lista()

{

    session_start();

        $id = "SELECT idtable from Tablero where userid =".$_SESSION['id'];

    $sql = "SELECT * FROM Notas where idtable=$id";
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