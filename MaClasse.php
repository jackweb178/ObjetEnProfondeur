<?php


class MaClasse
{
    //https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667055-les-objets-en-profondeur#/id/r-1667054
    public  $attrbut1="premier attribut public";
    public $attribut2="duexieme attribut public";

    private  $attrbutPrivate1="premier attribut private";
    private $attributPrivate2="duexieme attribut private";

    protected  $attrbutProtected1="premier attribut protected";
    protected $attributProtected2="duexieme attribut protected";

    function  listeAttribut()
    {
        foreach ($this as $attribut =>$valeur)
        {
            echo '<strong>',$attribut,'</strong> => ', $valeur,'<br/>';
        }
    }
}

class  Enfant extends MaClasse
{
    function listeAttribut()//redefinition de lafonction pour que ce ne soit pas celle de la classe mere qui soit appeler
    {
        foreach ($this as $attribut =>$valeur)
        {
            echo '<strong>',$attribut,'</strong> => ', $valeur,'<br/>';
        }
    }
}
$classe = new MaClasse() ;
$enfant = new Enfant();

echo '---- Liste les attributs depuis l\'intérieur de la classe principale ----<br />';
$classe->listeAttribut();

echo '<br />---- Liste les attributs depuis l\'intérieur de la classe enfant ----<br />';
$enfant->listeAttribut();

echo '<br />---- Liste les attributs depuis le script global ----<br />';
foreach ($classe as $attribut =>$valeur)
{
    echo '<strong>',$attribut,'</strong> => ', $valeur,'<br/>';
}