<?php
    /*<sumary>
        Modelo referente a tabela TB_PRJ_0002.
    </sumary>*/

    class TB_BRF_0002
    {
        #region "Propriedades"
        public $Id;
        public $Usuario;
        public $Conta;
        public $Valor;
        public $Parcela;
        public $Parcela_Paga;
        public $Obs;
        public $Tipo;
        public $Status;
        public $Data_End;
        public $Data_Insert;
        #endregion

        #region "Construtor"
        public function __construct($Id="",$Usuario="",$Conta="",$Valor="",$Parcela="",$Parcela_Paga="",$Obs="",$Tipo="",$Status="",$Data_End="",$Data_Insert="")
        {
            $this->Id               = $Id;
            $this->Usuario          = $Usuario;
            $this->Conta            = $Conta;
            $this->Valor            = $Valor;
            $this->Parcela          = $Parcela;
            $this->Parcela_Paga     = $Parcela_Paga;
            $this->Obs              = $Obs;
            $this->Tipo             = $Tipo;
            $this->Status           = $Status;
            $this->Data_End         = $Data_End;
            $this->Data_Insert      = $Data_Insert;
        }
        #endregion

        #region "Metodos Get"
        public function getId()             {   return $this->Id;               }
        public function getUsuario()        {   return $this->Usuario;          }
        public function getConta()          {   return $this->Conta;            }
        public function getValor()          {   return $this->Valor;            }
        public function getParcela()        {   return $this->Parcela;          }
        public function getParcela_Paga()   {   return $this->Parcela_Paga;     }
        public function getObs()            {   return $this->Obs;              }
        public function getTipo()           {   return $this->Tipo;             }
        public function getStatus()         {   return $this->Status;           }
        public function getData_End()       {   return $this->Data_End;         }
        public function getData_Insert()    {   return $this->Data_Insert;      }
        #endregion

        #region "Metodos Set"
        public function setId($Id)                      {   $this->Id               = $Id;              }
        public function setUsuario($Usuario)            {   $this->Usuario          = $Usuario;         }
        public function setConta($Conta)                {   $this->Conta            = $Conta;           }
        public function setValor($Valor)                {   $this->Valor            = $Valor;           }
        public function setParcela($Parcela)            {   $this->Parcela          = $Parcela;         }
        public function setParcela_Paga($Parcela_Paga)  {   $this->Parcela_Paga     = $Parcela_Paga;    }
        public function setObs($Obs)                    {   $this->Obs              = $Obs;             }
        public function setTipo($Tipo)                  {   $this->Tipo             = $Tipo;            }
        public function setStatus($Status)              {   $this->Status           = $Status;          }
        public function setData_End($Data_End)          {   $this->Data_End         = $Data_End;        }
        public function setData_Insert($Data_Insert)    {   $this->Data_Insert      = $Data_Insert;     }
        #endregion
    }
