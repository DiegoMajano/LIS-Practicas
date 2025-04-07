<?php 

require_once 'Controller.php';
require_once 'model/LibrosModel.php';
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
        $this->render('new.php');
    }

    public function insert() {

        $viewBag = array();

        if(isset($_POST)){
            $errores = array();

            $libro['codigo_libro'] = $_POST['codigo_libro'];
            $libro['nombre_libro'] = $_POST['nombre_libro'];
            $libro['nacionalidad'] = $_POST['nacionalidad'];

            if(!isCodigolibro($libro['codigo_libro'])){
                array_push($errores, "El código libro debe seguir formato LIBxxx");
                return;
            }

            if(empty($libro['nombre_libro'])){
                array_push($errores, "El nombre de la libro no puede estar vacío.");
                return;
            }

            if(!isText($libro['nacionalidad'])){
                array_push($errores, "El nacionalidad no es válido.");
                return;
            }

            if(count($errores) == 0){
                
                $this->model->insert($libro);
                header('Location:'.PATH.'/libros');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['libro'] = $libro;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function delete($params){
        $codigo=$params[0];
        $this->model->delete($codigo);
        header('Location:'.PATH.'/Libros');
    }

}

?>