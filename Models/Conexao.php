<?php

    /*<suamary>
        Classe preparada para conexao com o banco de dados
    </sumary>*/

    require_once("DadosConexao.php");

    abstract class Conexao
    {
        #region "Propriedades"
        protected $Base;
        #endregion
            
        #region "Construtor"
        protected function __construct()
        {
            $this->Base = null;
        }
        #endregion

        #region "Método para abrir a conexaõ com a base"
        protected function AbrirConexao()
        {
            $DadosConexao = new DadosConexao();

            $dsn = sprintf(
                            "mysql:host=%s;dbname=%s;charset=utf8mb4", 
                            $DadosConexao->getHost()
                            , $DadosConexao->getBase()
                            , array(
                                        PDO::ATTR_PERSISTENT => true
                                        , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                    )
                    );
            
            try
            {
                $this->Base = new PDO($dsn, $DadosConexao->getUser(), $DadosConexao->getPass());
            }
            catch (Exception $e)
            {
                die ($e->getMessage());
            }
        }
        #endregion

        #region "Método para fechar a conexao com a base"
        protected function FecharConexao()
        {
            $this->Base = null;
        }
        #endregion

        #region "Método para segurar o autocimmit"
        protected function InicarTransacao()
        {
            $this->Base->beginTransaction();
        }
        #endregion

        #region "Método para executar o retrocesso do processo efetuado"
        protected function Retroceder()
        {
            $this->Base->rollback();
        }
        #endregion

        #region "Método para dar commit do processo efetuado"
        protected function Commit()
        {
            $this->Base->commit();
        }
        #endregion
    }
?>