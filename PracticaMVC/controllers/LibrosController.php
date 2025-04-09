<?php 

require_once 'Controller.php';
require_once 'model/LibrosModel.php';
require_once 'model/AutoresModel.php';
require_once 'model/EditorialesModel.php';
require_once 'model/GenerosModel.php';
require_once 'helpers/validadores.php';

class LibrosController extends Controller {

    private $model;

    function __construct() {
        $this->model = new LibrosModel();
    }

    public function index(){
        $viewBag=[];

        $viewBag['libros'] = $this->model->get('');
        
        $this->render('index.php', $viewBag);
    }

    public function create(){
        $viewBag = [];

        $viewBag['autores'] = (new AutoresModel())->get('');
        $viewBag['editoriales'] = (new EditorialModel())->get('');
        $viewBag['generos'] = (new GeneroModel())->get('');
        $this->render('new.php', $viewBag);
    }

    public function insert() {

        $viewBag = array();

        if(isset($_POST)){
            $errores = array();

            $libro['codigo_libro'] = $_POST['codigo_libro'];
            $libro['nombre_libro'] = $_POST['nombre_libro'];
            $libro['existencias'] = (int)$_POST['existencias'];
            $libro['precio'] = (float)$_POST['precio'];
            $libro['codigo_autor'] = $_POST['codigo_autor'];
            $libro['codigo_editorial'] = $_POST['codigo_editorial'];
            $libro['id_genero'] = (int)$_POST['id_genero'];
            $libro['descripcion'] = $_POST['descripcion'];
            $libro['imagen'] = NULL;

            echo var_dump($libro);

            if(!isCodigolibro($libro['codigo_libro'])){
                array_push($errores, "El código libro debe seguir formato LIBxxxxxx");
                return;
            }

            if(empty($libro['nombre_libro'])){
                array_push($errores, "El nombre de la libro no puede estar vacío.");
                return;
            }

            if(count($errores) == 0){
                
                $this->model->insert($libro);
                header('Location:'.PATH.'/Libros');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['libro'] = $libro;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function update(){
        $viewBag = array();

        if(isset($_POST)){
            $errores = array();

            $libro['codigo_libro'] = $_POST['codigo_libro'];
            $libro['nombre_libro'] = $_POST['nombre_libro'];
            $libro['existencias'] = (int)$_POST['existencias'];
            $libro['precio'] = (float)$_POST['precio'];
            $libro['codigo_autor'] = $_POST['codigo_autor'];
            $libro['codigo_editorial'] = $_POST['codigo_editorial'];
            $libro['id_genero'] = (int)$_POST['id_genero'];
            $libro['descripcion'] = $_POST['descripcion'];
            $libro['imagen'] = NULL;

            if(!isCodigolibro($libro['codigo_libro'])){
                array_push($errores, "El código libro debe seguir formato LIBxxxxxx");
                return;
            }

            if(empty($libro['nombre_libro'])){
                array_push($errores, "El nombre de la libro no puede estar vacío.");
                return;
            }

            if(count($errores) == 0){
                
                $this->model->update($libro);
                header('Location:'.PATH.'/Libros');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['libro'] = $libro;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function edit($params){
        $viewBag = array();
        $codigo=$params[0];
        $viewBag['libro'] = $this->model->get($codigo)[0];
        $viewBag['autores'] = (new AutoresModel())->get('');
        $viewBag['editoriales'] = (new EditorialModel())->get('');
        $viewBag['generos'] = (new GeneroModel())->get('');
        $this->render('new.php', $viewBag);
    }

    public function delete($params){
        $codigo=$params[0];
        $this->model->delete($codigo);
        header('Location:'.PATH.'/Libros');
    }

}

?>