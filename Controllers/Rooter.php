<?php
    /*<sumary>
        Essa pagina controla o redirecionamento de paginas.
    </sumary>*/

    if($_GET)
    {
        $Controller = $_GET["Controller"];
        $Funcao     = $_GET["Funcao"];

        require_once($Controller.".php");
        $Obj        = new $Controller;
        $Obj->$Funcao();
    }
    else
    {
        require_once("HomeController.php");
        $Obj        = new HomeController;
        $Obj->Redirect("Login");
    }
?>