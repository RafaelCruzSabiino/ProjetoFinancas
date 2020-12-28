<?php

    /*<sumary>
        Essa classe foi preparada para fazer a conexão entre o sistema e a tabela 
        TB_BRF_0001 no banco de dados.
    </sumary>*/

    require_once("../Models/Conexao.php");

    class TB_BRF_0001_DAO extends Conexao
    {
        #region "Metodo construtor"
        public function __construct()
        {
            parent::__construct();
        }
        #endregion

        #region "Metodo para cadastrar no banco o usuario"
        public function InsertUser($TB_BRF_0001)
        {
            $sql = "CALL SP_BRF_0001_0001(?,?,?,?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $TB_BRF_0001->getNome());
                $Qry->bindValue(2, $TB_BRF_0001->getEmail());
                $Qry->bindValue(3, $TB_BRF_0001->getSenha());
                $Qry->bindValue(4, $TB_BRF_0001->getCriptografia());
                $Qry->bindValue(5, $TB_BRF_0001->getSalario());
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

        #region "Metodo para validar login usario no banco"
        public function ValidarLogin($TB_BRF_0001)
        {
            $sql = "CALL SP_BRF_0001_0002(?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $TB_BRF_0001->getEmail());
                $Qry->bindValue(2, $TB_BRF_0001->getCriptografia());
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

        #region "Metodo para buscar usuario logado no banco"
        public function GetInfoUser($ID)
        {
            $sql = "CALL SP_BRF_0001_0003(?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $ID);
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

        #region "Metodo para alterar usuario no banco"
        public function AlterarUser($TB_BRF_0001)
        {
            $sql = "CALL SP_BRF_0001_0004(?,?,?,?,?,?)";

            try
            {
                $this->AbrirConexao();
                $Qry = $this->Base->prepare($sql);
                $Qry->bindValue(1, $TB_BRF_0001->getId());
                $Qry->bindValue(2, $TB_BRF_0001->getNome());
                $Qry->bindValue(3, $TB_BRF_0001->getEmail());
                $Qry->bindValue(4, $TB_BRF_0001->getSenha());
                $Qry->bindValue(5, $TB_BRF_0001->getCriptografia());
                $Qry->bindValue(6, $TB_BRF_0001->getSalario());
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