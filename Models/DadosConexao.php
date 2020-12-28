<?php
    /*<sumary>
        Classe preparada para informações sobre o banco de dados
    </sumary>*/

    class DadosConexao
    {
        #region "Propriedades"
        public $User;
        public $Pass;
        public $Host;
        public $Base;
        #endregion

        #region "Construtor"
        public function __construct()
        {
            $this->User = "root";
            $this->Pass = "";
            $this->Host = "localhost";
            $this->Base = "BANCOSABINO";
        }
        #endregion

        #region "Metodos Get"
        public function getUser()    {   return $this->User;    }
        public function getPass()    {   return $this->Pass;    }
        public function getHost()    {   return $this->Host;    }
        public function getBase()    {   return $this->Base;    }
        #endregion
    }

?>
