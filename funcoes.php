<?php

function somar($a,$b){

	 $resultado = $a + $b;

	return $resultado;
}

function media($nota ){

	 	if($nota > 5){
 		$nota = "aprovado";
 	}elseif($nota === 5){
 		$nota = "é exatamente a $nota";
 	}elseif($nota == 5){
 		$nota = "é somente $nota";
 	}else{
 		$nota = "nenhuma das anteriores";
 	}

 	return $nota;

 }


function definePrimo ($numero){
	$contador = 0;
	//se esse numero for primo imprima ele.
	for ($i=1; $i <= 50 ; $i++) { 
		
		if ($numero % $i == 0){
			$contador ++;
		
	}
}

if($contador <= 2 && $contador > 0){
	return "<br>".$numero;
}
return "";
}

function numerosPrimos ($inicial, $final) {
	// @todo dentro do range passado 
	for($i = $inicial; $i <= $final ; $i++){
		echo definePrimo($i);
	}

}

function definirX ($linha, $coluna){
	if($linha == $coluna){
		echo 'x';
		}else {
			echo 0;
		}

}

?>
