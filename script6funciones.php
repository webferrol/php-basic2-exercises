<?php
declare(strict_types = 1); // con esto podemos tipar los datos en los parámetros de funciones y clases

//crea una función que cada vez que la llamemos realice un salto de línea en html

/**
 * Ejemplo de una función que realiza un salto de línea
 */
function saltoLinea (string $etiqueta = "<br>") : string {
	return $etiqueta;
}

?>

<span>Hola</span> <?php echo saltoLinea('<hr>')?> Mundo cruel


<?php
//crea una función que muestre por pantalla un mensaje personaliado como parámetro







//Modifica la función que viene a continuación para que a partir de un parámetro númerico
//(entre 1 y 7) devuelva el día de la semana
function getDia(){
	$array = ["lunes","martes","miércoles","jueves","viernes","sábado","domingo"];
	
}
