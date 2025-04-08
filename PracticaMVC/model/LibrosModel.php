<?php 

require_once 'model.php';

class LibrosModel extends Model{

    public function get($id){
        if($id == ''){

            $query = "SELECT * FROM libros
                        INNER JOIN autores ON libros.codigo_autor = autores.codigo_autor
                        INNER JOIN editoriales ON libros.codigo_editorial = editoriales.codigo_editorial
                        INNER JOIN generos ON libros.id_genero = generos.id_genero
                        order by libros.codigo_libro ASC
                        ";
    
            return $this->getQuery($query);
        }else{
            $query = "SELECT * FROM libros 
                        INNER JOIN autores ON libros.codigo_autor = autores.codigo_autor
                        INNER JOIN editoriales ON libros.codigo_editorial = editoriales.codigo_editorial
                        INNER JOIN generos ON libros.id_genero = generos.id_genero
                        WHERE codigo_libro = :codigo";
    
            return $this->getQuery($query, [':codigo'=>$id]);


        }

    }
    public function insert($libro=array()){
        $query = "INSERT INTO libros VALUES (:codigo_libro, :nombre_libro, :existencias, :precio, :codigo_autor, :codigo_editorial, :id_genero, :descripcion, :imagen)";

        return $this->setQuery($query, $libro);
    }
    
    public function delete($id){
        $query = "DELETE FROM libros WHERE codigo_libro = :codigo_libro";
        
        return $this->setQuery($query, ['codigo_libro'=>$id]);
        
    }
    
    public function update($libro=array()){
        $query = "UPDATE libros SET nombre_libro = :nombre_libro, existencias = :existencias, 
                                    precio = :precio, codigo_autor = :codigo_autor, codigo_editorial = :codigo_editorial, 
                                    id_genero = :id_genero, descripcion = :descripcion, imagen = :imagen 
                                    WHERE codigo_libro = :codigo_libro";

        return $this->setQuery($query, $libro);
    } 
}

?>