<?php


class empleados extends Conexion implements DataInterface{

public function lista()
{
    $sql = "SELECT * FROM Usuarios";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
        $rows = $result->fetch_all(MYSQLI_ASSOC);    
   }
   echo json_encode($rows);

    
}



public function detalle($id)
{
    $sql = "SELECT SALARIO from PLANTILLA WHERE EMPLEADO_NO=".$id;
    $result = $this->conn->query($sql);

       if($result->num_rows >0){
            $rows = $result->fetch_all(MYSQLI_ASSOC);    
       }
       echo json_encode($rows);

    
}



public function actualiza($form){

        $emp=$form["empleado"];
        $sueldo = $form["sueldo"];

         $sql = "UPDATE plantilla SET SALARIO='$sueldo' WHERE EMPLEADO_NO='$emp'";

        $result = $this->conn->query($sql);

        return $result;
    
}




}