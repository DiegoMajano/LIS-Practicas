<?php

require_once 'model.php';

class EditorialModel extends Model{
    public function get($id){
        if($id == ''){

            $query = "SELECT * FROM Editoriales";
    
            return $this->getQuery($query);
        }else{
            $query = "SELECT * FROM Editoriales WHERE codigo_editorial = :codigo";
    
            return $this->getQuery($query, [':codigo'=>$id]);


        }

    }
    public function insert($editorial=array()){
        $query = "INSERT INTO Editoriales VALUES (:codigo_editorial, :nombre_editorial, :contacto, :telefono)";

        return $this->setQuery($query, $editorial);
    }
    
    public function delete($id){
        $query = "DELETE FROM Editoriales WHERE codigo_editorial = :codigo_editorial";
        
        return $this->setQuery($query, ['codigo_editorial'=>$id]);
        
    }
    
    public function update($editorial=array()){
        $query = "UPDATE Editoriales SET nombre_editorial = :nombre_editorial, contacto = :contacto, telefono = :telefono WHERE codigo_editorial = :codigo_editorial";

        return $this->setQuery($query, $editorial);
    }
}

?>