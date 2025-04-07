<?php 

require_once 'Controller.php';
require_once 'model/AutoresModel.php';
require_once 'helpers/validadores.php';

class AutoresController extends Controller{
    
    private $model;

    function __construct(){
        $this->model = new AutoresModel();
    }

    public function index(){
        $viewBag=[];

        $viewBag['autores'] = $this->model->get('');
        
        $this->render('index.php', $viewBag);
    }

    public function create(){
        $this->render('new.php');
    }

    public function insert() {

        $viewBag = array();

        if(isset($_POST)){
            $errores = array();

            $autor['codigo_autor'] = $_POST['codigo_autor'];
            $autor['nombre_autor'] = $_POST['nombre_autor'];
            $autor['nacionalidad'] = $_POST['nacionalidad'];

            if(!isCodigoAutor($autor['codigo_autor'])){
                array_push($errores, "El código autor debe seguir formato AUTxxx");
                return;
            }

            if(empty($autor['nombre_autor'])){
                array_push($errores, "El nombre de la autor no puede estar vacío.");
                return;
            }

            if(!isText($autor['nacionalidad'])){
                array_push($errores, "El nacionalidad no es válido.");
                return;
            }

            if(count($errores) == 0){
                
                $this->model->insert($autor);
                header('Location:'.PATH.'/Autores');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['autor'] = $autor;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function delete($params){
        $codigo=$params[0];
        $this->model->delete($codigo);
        header('Location:'.PATH.'/Autores');
    }
}


?>