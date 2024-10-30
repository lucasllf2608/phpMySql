<?php 


class LoginController {

    public function logar(){
        $pageTarget = " ../view/menu.php";
        header("Location:".$pageTarget);
        exit();
    }

}


if(isset($_GET['action'])&& $_GET['action'] == 'logar'){
$controller = new LoginController();
$controller->logar();
}


?>