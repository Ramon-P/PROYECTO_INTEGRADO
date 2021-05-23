<?php


class carga extends Conexion{

public function cargaTablero(){
$uid = $_GET['userid'];
$sql = "SELECT nombre, idtable FROM Tablero where userid=$uid";
$result = $this->conn->query($sql);

$array = [];
    
        while($row= mysqli_fetch_array($result)){
            $nombre=$row['nombre'];
            $idtable=$row['idtable'];
            $array[] = array('nombre'=>$nombre, 'idtable'=>$idtable);
            
        }
        echo json_encode($array);

}


public function cargaNota(){
    
$uid = $_GET['userid'];
$nombre = $_GET['nombre'];

$sql = "SELECT idnota,tittle,content FROM Notas WHERE idtable = (SELECT idtable from Tablero where Tablero.userid = $uid and Tablero.nombre = '$nombre')";
$result = $this->conn->query($sql);

$array = [];
        while($row= mysqli_fetch_array($result)){
            $id=$row['idnota'];
            $tittle=$row['tittle'];
            $content=$row['content'];
            $array[] = array('idnota'=>$id,'tittle'=>$tittle, 'content'=>$content);
            
        }
        echo json_encode($array);

}

public function guardarnota(){


$idnota = $_GET['idnota'];
$tit= $_GET['tittle'];
$cont = $_GET['content'];
$idta= $_GET['idtable'];
   
$sql = "UPDATE Notas SET tittle = '$tit', content='$cont' where idnota = $idnota";
$intro = $this->conn->query($sql);

echo json_encode($intro);

} 

public function insertarNota(){

    $titl= $_GET['tittle'];
    $contt = $_GET['content'];
    $idta= $_GET['idtable'];

    $sql = "INSERT INTO Notas(tittle, content, idtable) VALUES ('$titl','$contt',$idta)";
    
    echo json_encode ($this->conn->query($sql));

    
}

public function borrar(){

    $idn= $_GET['idnota'];

    $sql = "DELETE FROM Notas where idnota = $idn";
    
    echo json_encode ($this->conn->query($sql));

    
}






}




?>