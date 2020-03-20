<?php


class MaClasse
{
    public $attribut1;
    public $attribut2;
}
$a=new MaClasse();// $a contient lidentifiant de lobjet creer et non l'objet lui meme
//var_dump($a);
$b=$a;
//var_dump($b);
$a->attribut1="hello <br/>";
echo  $b->attribut1 ;

$b->attribut2="Salut";
echo $a->attribut2;