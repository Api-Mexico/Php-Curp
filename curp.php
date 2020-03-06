<?php
//ese usuario es de prueba (50 peticiones gratuitas). o puedes crear un usuario: https://conectame.ddns.net/consola/login.php
$usuario = 'prueba';
$contrasenia = 'sC%7D9pW1Q%5Dc';
$valor = 'FOQV420702HDFXSC07'; //reemplazar por el curp a consultar
$metodo = 'curp';
$url = 'https://conectame.ddns.net/rest/api.php?m='.$metodo.'&user='.$usuario.'&pass='.$contrasenia.'&val='.$valor;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_respuesta = curl_exec($curl);
if ($curl_respuesta === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('Ocurrio un error: ' . var_export($info));
}
curl_close($curl);
$resultado = json_decode($curl_respuesta);
print("<pre>".print_r($resultado,true)."</pre>");
die();

/* RESPUESTA
	stdClass Object
(
    [Response] => correct
    [Curp] => FOQV420702HDFXSC07
    [DatosFiscales] => stdClass Object
        (
            [Rfc] => FOQV4207025T9
            [Comprobado] => 0
            [Sncf] => -
            [Subcontratacion] => -
        )

    [Paterno] => FOX
    [Materno] => QUESADA
    [Nombre] => VICENTE
    [Sexo] => H
    [FechaNacimiento] => 1942-07-02
    [Nacionalidad] => MEX
    [DocProbatorio] => 1
    [AnioReg] => 1943
    [Foja] => 0
    [Tomo] => 0
    [Libro] => 0
    [NumActa] => 208
    [CRIP] => 
    [NumEntidadReg] => 9
    [CveMunicipioReg] => 999
    [NumRegExtranjeros] => 
    [FolioCarta] => 
    [CveEntidadEmisora] => 
    [StatusCurp] => RCC
)
*/
