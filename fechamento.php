<?php

require __DIR__ . '/vendor/autoload.php';

//DEPENDENCIAS
use \App\Awesome\Economia;

//INSTANCIA DA CLASSE DE API
$obEconomia = new Economia;

//VERIFICA OS ARGUMENTOS
if(!isset($argv[2])){
    die('É necessário enviar duas moedas');
}

//MOEDAS
$moedaA = $argv[1];
$moedaB = $argv[2];

//EXECUTA A REQUISIÇÃO NA API
$dadosFechamento = $obEconomia->consultarUltimosFechamentos($moedaA,$moedaB,7);

//IMPRIME O RETORNO DA COTAÇÃO
echo 'Moedas: '.$moedaA.' -> '.$moedaB."\n";

foreach($dadosFechamento as $fechamento){
    //OUTPUT
    $output = [
        date('Y-m-d', $fechamento['timestamp']),
        number_format($fechamento['bid'],4,'.',''),
        number_format($fechamento['ask'],4,'.','')
    ];
    //IMPRIME O RESULTADO
    echo implode(' | ',$output)."\n";
}