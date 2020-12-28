<?php

    /*<sumary>
        Classe responsavel por inserir e consultar contas assim como alterar
    </sumary>*/

    #region "Inclusao das paginas necessarias"
    require_once("../Models/TB_BRF_0002.php");
    require_once("../DAO/TB_BRF_0002_DAO.php");
    require_once("BaseController.php");
    #endregion

    class ContaController extends BaseController
    {
        public $DAO;

        #region "Metodo Contrutor"
        function __construct()
        {
            parent::__construct();
            $this->DAO = new TB_BRF_0002_DAO();
        }
        #endregion

        #region "Metodo para cadastrar conta"
        public function InsertConta()
        {
            $TB_BRF_0002 = new TB_BRF_0002();
            $TB_BRF_0002->setUsuario($_SESSION["UserId"]);
            $TB_BRF_0002->setConta($_POST["Conta"]);
            $TB_BRF_0002->setValor((double)$_POST["Valor"]);
            $TB_BRF_0002->setParcela($_POST["Parcela"]);
            $TB_BRF_0002->setObs($_POST["Obs"]);
            $TB_BRF_0002->setTipo($_POST["Tipo"]);

            $ret = $this->DAO->InsertConta($TB_BRF_0002);

            if($ret[0]["ID"] > 0)
            {
                $this->Redirect("ProtectPages/Home");
            }
            else
            {
                echo("Erro");
                $this->Redirect("ProtectPages/CadastroContas");
            }
        }
        #endregion

        #region "Metodo para consultar conta usuarios todas"
        public function ConsultarConta()
        {
            $ret = $this->DAO->ConsultarConta($_SESSION["UserId"]);

            if($ret["RowCount"] > 0)
            {
                echo json_encode($ret["Itens"]);
            }
            else
            {
                echo 0;
            }

        }
        #endregion

        #region "Metodo para consultar conta expecifica"
        public function BuscarContaExpecifica()
        {
            $ret = $this->DAO->BuscarContaExpecifica($_POST["ID"]);

            if($ret["RowCount"] > 0)
            {
                echo json_encode($ret["Itens"]);
            }
            else
            {
                echo 0;
            }

        }
        #endregion
        
        #region "Metodo para pagar as contas"
        public function PagarConta()
        {
            $ParcelaAtual = 0;
            if($_POST["Filtro"] != "Todas")
            {
                $ret = $this->DAO->BuscarContaExpecifica($_POST["ID"]);
            }
            else
            {
                $ret = $this->DAO->ConsultarConta($_SESSION["UserId"]);
            }

            if($ret["RowCount"] > 0)    
            {
                foreach($ret["Itens"] as $Item)
                {
                    $ParcelaAtual = $Item["PARCELA_PAGA"] + 1;
                    if($Item["PARCELA"] == $ParcelaAtual && $Item["TIPO"] != "Fixo")
                    {
                        $ResultBanco = $this->DAO->PagarContaCompleto($Item["ID"], $ParcelaAtual);
                    }
                    else if($Item["TIPO"] != "Fixo")
                    {
                        $ResultBanco = $this->DAO->PagarContaSF($Item["ID"], $ParcelaAtual);
                    }
                    else
                    {
                        $ResultBanco = $this->DAO->PagarContaFixa($Item["ID"]);
                    }
                }

                if($ResultBanco > 0)
                {
                    echo 1;
                }
                else
                {
                    echo 0;
                }
            }            
        }
        #endregion

        #region "Metodo para Alterar Info Conta"
        public function AlterarConta()
        {
            $TB_BRF_0002 = new TB_BRF_0002();
            $TB_BRF_0002->setId($_POST["IdConta"]);
            $TB_BRF_0002->setConta($_POST["Conta"]);
            $TB_BRF_0002->setValor($_POST["Valor"]);
            $TB_BRF_0002->setParcela($_POST["Parcela"]);
            $TB_BRF_0002->setTipo($_POST["Tipo"]);
            $TB_BRF_0002->setObs($_POST["Obs"]);

            $ret = $this->DAO->AlterarConta($TB_BRF_0002);

            if($ret > 0)
            {
                $this->Redirect("ProtectPages/Home");
            }
            else
            {
                $this->Redirect("ProtectPages/AlterarConta");
            }
        }
        #endregion

    }

?>