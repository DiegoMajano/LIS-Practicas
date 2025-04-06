<?php 

require_once 'model.php';

class GeneroModel extends Model{
    public function get($id){
        if($id == ''){

            $query = "SELECT * FROM generos";
    
            return $this->getQuery($query);
        }else{
            $query = "SELECT * FROM generos WHERE id_genero = :codigo";
    
            return $this->getQuery($query, [':codigo'=>$id]);


        }

    }
    public function insert($autor=array()){
        $query = "INSERT INTO generos VALUES (:id_genero, :nombre_genero, :descripcion)";

        return $this->setQuery($query, $autor);
    }
    
    public function delete($id){
        $query = "DELETE FROM generos WHERE id_genero = :id_genero";
        
        return $this->setQuery($query, ['id_genero'=>$id]);
        
    }
    
    public function update($autor=array()){
        $query = "UPDATE generos SET nombre_genero = :nombre_genero, descripcion = :descripcion WHERE id_genero = :id_genero";

        return $this->setQuery($query, $autor);
    }
}


?>