<?php
    class Myclass {

            //metodo no estatico

            public function NoEstatico() {
                echo "Soy un Metodo no estatico <br>";
            }

            static function Estatico() {
                return "Soy un metodo Estatico <br>";
            }

    }

/* $myclass = new Myclass();

$myclass->NoEstatico();
$myclass->NoEstatico();
$myclass->NoEstatico(); */

$myclassesta = Myclass::Estatico();

echo $myclassesta;


echo $myclassesta;


echo $myclassesta;


echo $myclassesta;
?>