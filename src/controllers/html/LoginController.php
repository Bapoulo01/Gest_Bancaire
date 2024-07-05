<?php
require_once("../src/models/LoginModel.php");
require_once("../src/core/Controller.php");


class LoginController extends Controller {
    private LoginModel $loginModel;

public function __construct(){
    parent::__construct();
    $this->layout="connexion"; 
    $this ->loginModel = new LoginModel;
    $this->load();

}

public function load(){
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="login") {
            $this->login();
        }elseif ($_REQUEST["action"]=="show-form"){
            $this->showForm();
        }
        elseif ($_REQUEST["action"]=="logout"){
            Session::close();
        }
    }
    else{
        $this->showForm();
    }

}

public function showForm(){
    parent::rendorView("login/login");
}

public function redirectAfterConnect(){
    switch (Autorisation::getRole()) {

        case 'Client':
            
            header("Location:".WEBROOT."/?ressource=html&controller=demande");
        exit;
        
        default:
            # code...
            break;
    }
}

private function login(){
    if(!Validator::isEmpty("email","login est obligatoire")){
        Validator::isEmail("email");
    }
    Validator::isEmpty("pwd","");
    if (Validator::validate()) {
        $connect= $this->loginModel->connexion($_POST["email"],$_POST["pwd"]);
        if ($connect!=false) {
            Session::set("userConnect",$connect);
            $this->redirectAfterConnect();
            // var_dump(Autorisation::getRole());
            // var_dump(Autorisation::hasRole("Client"));

        }else{
            #Erreur not Exit
            parent::rendorView("login/login",["errors"=>["connect"=>"login ou password incorrect"]]);

        }
    }else{
        parent::rendorView("login/login",["errors"=>Validator::$errors]);

    }

    // var_dump($connect);
    // parent::rendorView("login/login");
    // $datas = $this ->demandeModel-> findAllWithClient();
    // require_once("../views/demande/liste.demande.html.php");

}

}