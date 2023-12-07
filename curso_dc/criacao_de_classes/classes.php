<?php 
    class DankiCode
    {


        public $nomeStatic = '  leandro';

        function __construct($nome)
        {
            print $nome;
        }

        public $nome = '  joão';
        public function printNome(){
            return '  Leandro';
        }

        private function printNomeprivate(){
            print '  Leandro';
        }

        public function printNomePublic(){
            $this->printNomeprivate();
        }

        public static  function printNomeStatic(){
            print'  laendroStaic';

        }
    }

    $dankiCode = new dankiCode('   leandro');
    print $dankiCode->printNome();

    print $dankiCode->nome;
    $dankiCode->printNomePublic();

    DankiCode::printNomeStatic();

    $dankiCodestatic1 = new DankiCode('   leandrosStatic');

    $dankiCodestatic1->nomeStatic = '   NomeAlterado';
     
    print $dankiCodestatic1->nomeStatic;

    $dankiCodestatic2 = new DankiCode('  LeandroStatic2');

    print $dankiCodestatic2->nomeStatic;


?>