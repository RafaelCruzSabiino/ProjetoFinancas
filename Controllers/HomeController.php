<?php

    /*<sumary>
        Classe responsavel por validar login e redirecionar paginas
    </sumary>*/

    #region "Inclusao das paginas necessarias"
    require_once("BaseController.php");
    require_once("../Models/TB_BRF_0001.php");
    require_once("../DAO/TB_BRF_0001_DAO.php");
    #endregion

    class HomeController extends BaseController
    {
        public $DAO;

        #region "Metodo Construtor"
        function __construct()
        {
            parent::__construct();
            $this->DAO = new TB_BRF_0001_DAO();
        }
        #endregion

        #region "Metodo para Inserir Usuario"
        public function InsertUser()
        {
            $TB_BRF_0001 = new TB_BRF_0001();
            $TB_BRF_0001->setNome($_POST["Nome"]);
            $TB_BRF_0001->setEmail($_POST["Email"]);
            $TB_BRF_0001->setSenha($_POST["Senha"]);
            $TB_BRF_0001->setCriptografia(md5($_POST["Senha"]));
            $TB_BRF_0001->setSalario((double)$_POST["Salario"]);

            $ret = $this->DAO->InsertUser($TB_BRF_0001);

            if($ret[0]["ID"] > 0)
            {
                $this->Redirect("Login");
            }
            else
            {
                var_dump("Erro ao cadastrar!");
            }
        }
        #endregion

        #region "Metodo para Validar login"
        public function ValidarLogin()
        {
            $TB_BRF_0001 = new TB_BRF_0001();
            $TB_BRF_0001->setEmail($_POST["Email"]);
            $TB_BRF_0001->setCriptografia(md5($_POST["Senha"]));

            $ret = $this->DAO->ValidarLogin($TB_BRF_0001);

            if($ret[0]["ID"] > 0)
            {

                $_SESSION["UserId"]         = $ret[0]["ID"];
                $_SESSION["UserNome"]       = $ret[0]["NOME"];
                $_SESSION["UserSalario"]    = $ret[0]["SALARIO"];
                $this->Redirect("ProtectPages/Home"); 
            }
            else
            {
                $this->Redirect("Login");
            }
        }
        #endregion

        #region  "Metodo para buscar usuario logado"
        public function GetInfoUser()
        {
            $ret = $this->DAO->GetInfoUser($_SESSION["UserId"]);

            if($ret[0]["ID"] > 0)
            {
                echo json_encode($ret);
            }
            else
            {
                echo 0;
            }
        }
        #endregion

        #region "Metodo para Alterar info Usuario"
        public function AlterarUser()
        {
            $TB_BRF_0001 = new TB_BRF_0001();
            $TB_BRF_0001->setId($_SESSION["UserId"]);
            $TB_BRF_0001->setNome($_POST["Nome"]);
            $TB_BRF_0001->setEmail($_POST["Email"]);
            $TB_BRF_0001->setSenha($_POST["Senha"]);
            $TB_BRF_0001->setCriptografia(md5($_POST["Senha"]));
            $TB_BRF_0001->setSalario($_POST["Salario"]);

            $ret = $this->DAO->AlterarUser($TB_BRF_0001);

            if($ret > 0)
            {
                $_SESSION["UserNome"]       = $_POST["Nome"];
                $_SESSION["UserSalario"]    = $_POST["Salario"];
                $this->Redirect("ProtectPages/Home");
            }
            else
            {
                $this->Redirect("ProtectPages/UserArea");
            }
        }
        #endregion

        #region "Metodo para fazer o logout do usuario"
        function LogOut()
        {
            session_reset();
            session_destroy();
            $this->Redirect("Login");
        }
        #endregion

    }

?>