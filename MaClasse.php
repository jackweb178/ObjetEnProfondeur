<?php


class MaClasse
{
    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667055-les-objets-en-profondeur#/id/r-1670283
    private static $instance =0;

    public function __construct()
    {
        self::$instance++;
    }

    public function __clone()
    {
        self::$instance++;
    }

    public static function getInstance(){
        return self::$instance;
    }
}

$a =new MaClasse();
echo 'Le nombre dinstance est de  : ',MaClasse::getInstance(),'<br/>';// affiche 1
$b= clone $a;

echo 'Le nombre dinstance est de  : ',MaClasse::getInstance();// affiche 2