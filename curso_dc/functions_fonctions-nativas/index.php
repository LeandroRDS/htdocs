<?php
function helloWorld(){
    print 'Hello Word!!';
    print '<br>';
};

helloWorld();


function somar($n1, $n2){
    return $n1 + $n2;
    
};

print somar(10,20);
print '<br>';
function verificaNome($nome = 'null'){
    if($nome == 'fe'){
        return true;
    }else{
        return false;
    }
};

if(verificaNome()){
    print 'v';
};

print '<br>';

$nome = 'fe';
print $nome;
print '<br>';
$novoNome = str_replace('fe','fee',$nome);
print $novoNome;
print '<br>';

$nomeRecortado = substr($nome,0,1);
print $nomeRecortado;
print '<br>';

$novoNome = explode(' ', $nome);
print_r($novoNome);   
print '<br>';

$novoNome = implode(' ', $novoNome);
print $novoNome;

?>
