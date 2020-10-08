<?php

/**
 * classe = planta, da arquitetura
 *    - atributos = caracteristicas
 *    - métodos = ações
 * 
 * objeto = casa
 */

 /*
include 'Animal.php';

$gato_prof = new Animal("Nicolau");
$gato_prof->come("Wiskas");
$gato_prof->dorme();

echo $gato_prof->nome;


echo "__________________________________________ <br />";

$cachorro_prof = new Animal("Rex");
$cachorro_prof->dorme();*/


try {

    include "Gato.php";

    $gato2 = new Gato("Nicolau");
    $gato2->come("Sache");
    $gato2->dorme();
    $gato2->miar();


    include "Cachorro.php";
    $cao = new Cachorro("Rex");
    $cao->come("Ração");
    $cao->dorme();
    $cao->latir();

    //echo $cao->nome;



} catch(Exception $e) {

    echo $e->getMessage();
}









