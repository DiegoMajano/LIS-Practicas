<?php 

require_once 'Controller.php';
require_once 'model/GenerosModel.php';
require_once 'helpers/validadores.php';

class GenerosController extends Controller {
    
    private $model;

    function __construct(){
        $this->model = new GeneroModel();
    }

    public function index(){
        $viewBag=[];

        $viewBag['generos'] = $this->model->get('');
        
        $this->render('index.php', $viewBag);
    }

    public function create(){
        $this->render('new.php');
    }

    public function insert() {

        $viewBag = array();

        if(isset($_POST)){
            $errores = array();

            $genero['id_genero'] = $_POST['id_genero'];
            $genero['nombre_genero'] = $_POST['nombre_genero'];
            $genero['descripcion'] = $_POST['descripcion'];

            if(!isCodigoGenero($genero['id_genero'])){
                array_push($errores, "El id del género debe seguir formato x");
                return;
            }

            if(empty($genero['nombre_genero'])){
                array_push($errores, "El nombre del género no puede estar vacío.");
                return;
            }

            if(!isText($genero['descripcion'])){
                array_push($errores, "El descripcion no es válida.");
                return;
            }

            if(count($errores) == 0){
                
                $this->model->insert($genero);
                header('Location:'.PATH.'/Generos');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['genero'] = $genero;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function delete($params){
        $codigo=$params[0];
        $this->model->delete($codigo);
        header('Location:'.PATH.'/Generos');
    }
}

?>