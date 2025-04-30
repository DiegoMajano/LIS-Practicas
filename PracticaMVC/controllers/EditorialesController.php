<?php 

require_once 'Controller.php';
require_once 'model/EditorialesModel.php';
require_once 'helpers/validadores.php';

class EditorialesController extends Controller{
    
    private $model;

    function __construct(){
        if(empty($_SESSION['user'])){
            header('location:'.PATH.'/Usuarios/login');
        }
        $this->model = new EditorialModel();
    }

    public function index(){

        if(empty($_SESSION['user'])){
            header('location:'.PATH.'/Usuarios/login');
        }
        $viewBag=[];

        $viewBag['editoriales'] = $this->model->get('');
        
        $this->render('index.php', $viewBag);
    }

    public function create(){
        $this->render('new.php');
    }

    public function insert() {

        $viewBag = array();
        $errores = array();

        if(isset($_POST)){

            $editorial['codigo_editorial'] = $_POST['codigo_editorial'];
            $editorial['nombre_editorial'] = $_POST['nombre_editorial'];
            $editorial['contacto'] = $_POST['contacto'];
            $editorial['telefono'] = $_POST['telefono'];
            
            if(!isCodigoEditorial($editorial['codigo_editorial'])){
                array_push($errores, "El código editorial debe seguir formato EDIxxx");
                return;
            }

            if(empty($editorial['nombre_editorial'])){
                array_push($errores, "El nombre de la editorial no puede estar vacío.");
                return;
            }

            if(!isText($editorial['contacto'])){
                array_push($errores, "El contacto no es válido.");
                return;
            }

            if(!isPhone($editorial['telefono'])){
                array_push($errores, "El teléfono no es válido.");
                return;
            }

            echo count($errores);  
            if(count($errores) == 0){
                echo count($errores);
                $this->model->insert($editorial);
                header('Location:'.PATH.'/Editoriales');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['editorial'] = $editorial;
                $this->render('new.php', $viewBag);
            }
        }          
    }
    public function update() {

        $viewBag = array();
        $errores = array();

        if(isset($_POST)){

            $editorial['codigo_editorial'] = $_POST['codigo_editorial'];
            $editorial['nombre_editorial'] = $_POST['nombre_editorial'];
            $editorial['contacto'] = $_POST['contacto'];
            $editorial['telefono'] = $_POST['telefono'];
            
            if(!isCodigoEditorial($editorial['codigo_editorial'])){
                array_push($errores, "El código editorial debe seguir formato EDIxxx");
                return;
            }

            if(empty($editorial['nombre_editorial'])){
                array_push($errores, "El nombre de la editorial no puede estar vacío.");
                return;
            }

            if(!isText($editorial['contacto'])){
                array_push($errores, "El contacto no es válido.");
                return;
            }

            if(!isPhone($editorial['telefono'])){
                array_push($errores, "El teléfono no es válido.");
                return;
            }

            echo count($errores);  
            if(count($errores) == 0){
                echo count($errores);
                $this->model->update($editorial);
                header('Location:'.PATH.'/Editoriales');
            } else{
                $viewBag['errores']=$errores;
                $viewBag['editorial'] = $editorial;
                $this->render('new.php', $viewBag);
            }
        }          
    }

    public function edit($params){
        $viewBag = array();

        $codigo_editorial = $params[0];
    
        $viewBag['editorial'] = $this->model->get($codigo_editorial)[0];
        $this->render('new.php', $viewBag);
    }

    public function delete($params){
        $codigo=$params[0];
        $this->model->delete($codigo);
        header('Location:'.PATH.'/Editoriales');
    }
}


?>