<?php 
    class DankiCode
    {
        function __construct($nome)
        {
            print $nome;
        }

        public $nome = 'joão';
        public function printNome(){
            return 'Leandro';
        }
    }

    $dankiCode = new dankiCode('leandro');
    print $dankiCode->printNome();

    print $dankiCode->nome;
?>