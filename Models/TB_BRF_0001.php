<?php
    /*<sumary>
        Modelo referente a tabela TB_PRJ_0001.
    </sumary>*/

    class TB_BRF_0001
    {
        #region "Propriedades"
        public $Id;
        public $Nome;
        public $Email;
        public $Senha;
        public $Criptografia;
        public $Salario;
        public $Data_Insert;
        #endregion

        #region "Construtor"
        public function __construct($Id="",$Nome="",$Email="",$Senha="",$Criptografia="",$Salario="", $Data_Insert="")
        {
            $this->Id               = $Id;
            $this->Nome             = $Nome;
            $this->Email            = $Email;
            $this->Senha            = $Senha;
            $this->Criptografia     = $Criptografia;
            $this->Salario          = $Salario;
            $this->Data_Insert      = $Data_Insert;
        }
        #endregion

        #region "Metodos Get"
        public function getId()             {   return $this->Id;               }
        public function getNome()           {   return $this->Nome;             }
        public function getEmail()          {   return $this->Email;            }
        public function getSenha()          {   return $this->Senha;            }
        public function getCriptografia()   {   return $this->Criptografia;     }
        public function getSalario()        {   return $this->Salario;          }
        public function getData_Insert()    {   return $this->Data_Insert;      }
        #endregion

        #region "Metodos Set"
        public function setId($Id)                      {   $this->Id           = $Id;              }
        public function setNome($Nome)                  {   $this->Nome         = $Nome;            }
        public function setEmail($Email)                {   $this->Email        = $Email;           }
        public function setSenha($Senha)                {   $this->Senha        = $Senha;           }
        public function setCriptografia($Criptografia)  {   $this->Criptografia = $Criptografia;    }
        public function setSalario($Salario)            {   $this->Salario      = $Salario;         }
        public function setData_Insert($Data_Insert)    {   $this->Data_Insert  = $Data_Insert;     }
        #endregion
    }
