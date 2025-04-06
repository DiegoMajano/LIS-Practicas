<?php 

require_once 'model.php';

class AutoresModel extends Model {

    public function get($id){
        if($id == ''){

            $query = "SELECT * FROM autores";
    
            return $this->getQuery($query);
        }else{
            $query = "SELECT * FROM autores WHERE codigo_autor = :codigo";
    
            return $this->getQuery($query, [':codigo'=>$id]);


        }

    }
    public function insert($autor=array()){
        $query = "INSERT INTO autores VALUES (:codigo_autor, :nombre_autor, :nacionalidad)";

        return $this->setQuery($query, $autor);
    }
    
    public function delete($id){
        $query = "DELETE FROM autores WHERE codigo_autor = :codigo_autor";
        
        return $this->setQuery($query, ['codigo_autor'=>$id]);
        
    }
    
    public function update($autor=array()){
        $query = "UPDATE autores SET nombre_autor = :nombre_autor, nacionalidad = :nacionalidad WHERE codigo_autor = :codigo_autor";

        return $this->setQuery($query, $autor);
    }
}

?>