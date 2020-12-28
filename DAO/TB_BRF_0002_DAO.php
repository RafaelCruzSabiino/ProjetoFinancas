<?php

    /*<sumary>
        Essa classe foi preparada para fazer a conexão entre o sistema e a tabela 
        TB_BRF_0002 no banco de dados.
    </sumary>*/

    require_once("../Models/Conexao.php");

    class TB_BRF_0002_DAO extends Conexao
    {
        #region "Metodo construtor"
        public function __construct()
        {
            parent::__construct();
        }
        #endregion

        #region "Metodo para cadastrar conta no banco de dados"
        public function InsertConta($TB_BRF_0002)
        {
            $sql = "CALL SP_BRF_0002_0001(?,?,?,?,?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $TB_BRF_0002->getUsuario());
                $Qry->bindValue(2, $TB_BRF_0002->getConta());
                $Qry->bindValue(3, $TB_BRF_0002->getValor());
                $Qry->bindValue(4, $TB_BRF_0002->getParcela());
                $Qry->bindValue(5, $TB_BRF_0002->getObs());
                $Qry->bindValue(6, $TB_BRF_0002->getTipo());
                $Qry->execute();

                $ret = $Qry->fetchAll(PDO::FETCH_ASSOC);
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        #region "Metodo para consultar todas as contas do usuario no banco"
        public function ConsultarConta($User)
        {
            $sql = "CALL SP_BRF_0002_0002(?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $User);
                $Qry->execute();

                $ret = array(
                                "Itens"         => $Qry->fetchAll(PDO::FETCH_ASSOC)
                                , "RowCount"    => $Qry->rowCount()
                            );
                $this->FecharConexao();
            }
            catch(PDOExpection $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        #region "Buscar uma conta expecifica"
        public function BuscarContaExpecifica($ID)
        {
            $sql = "CALL SP_BRF_0002_0003(?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $ID);
                $Qry->execute();

                $ret = array(
                    "Itens"         => $Qry->fetchAll(PDO::FETCH_ASSOC)
                    , "RowCount"    => $Qry->rowCount()
                );
                $this->FecharConexao();
            }
            catch(PDOExpection $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        #region "Pagar conta sem fecha-lá"
        public function PagarContaSF($ID, $Parcela)
        {
            $sql = "CALL SP_BRF_0002_0004(?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $ID);
                $Qry->bindValue(2, $Parcela);
                $Qry->execute();

                $ret = $Qry->rowCount();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        #region "Pagar conta por completo"
        public function PagarContaCompleto($ID, $Parcela)
        {
            $sql = "CALL SP_BRF_0002_0005(?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $ID);
                $Qry->bindValue(2, $Parcela);
                $Qry->execute();

                $ret = $Qry->rowCount();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        
        #region "Pagar conta por completo"
        public function PagarContaFixa($ID)
        {
            $sql = "CALL SP_BRF_0002_0006(?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $ID);
                $Qry->execute();

                $ret = $Qry->rowCount();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion

        #region "Alterar Conta no banco"
        public function AlterarConta($TB_BRF_0002)
        {
            $sql = "CALL SP_BRF_0002_0007(?,?,?,?,?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $TB_BRF_0002->getId());
                $Qry->bindValue(2, $TB_BRF_0002->getConta());
                $Qry->bindValue(3, $TB_BRF_0002->getValor());
                $Qry->bindValue(4, $TB_BRF_0002->getParcela());
                $Qry->bindValue(5, $TB_BRF_0002->getTipo());
                $Qry->bindValue(6, $TB_BRF_0002->getObs());
                $Qry->execute();

                $ret = $Qry->rowCount();
                $this->FecharConexao();
            }
            catch(PDOException $e)
            {
                $ret = "Erro na aplicação: " . $e->getMessage();
            }

            return $ret;
        }
        #endregion
    }

?>