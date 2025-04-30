<?php
require_once 'Controller.php';
require_once 'model/UsuariosModel.php';
class UsuariosController extends Controller{

    private $model;

    function __construct(){
        $this->model= new UsuariosModel();
    }

    public function login(){
       $this->render('login.php');
    }

    public function check_user(){
        $viewbag=array();
        $user=$_POST['usuario'];
        $password=$_POST['password'];
        $result=$this->model->validateUser($user,$password);
        if(empty($result)){
            $viewbag['error']='Usuario y/o contrasena incorrecta';
            $this->render('login.php',$viewbag);
        }
        else{
            $_SESSION['user']=$user;
            $_SESSION['id_tipo_usuario']=$result[0]['id_tipo_usuario'];
            header('location:'.PATH.'/Editoriales');
        }
    }

    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['id_tipo_usuario']);
        $_SESSION=array();
        $this->render('login.php');

    }
}