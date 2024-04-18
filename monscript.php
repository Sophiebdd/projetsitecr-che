<?php

$username = "root";
$password = "";
$link = new PDO("mysql:host=localhost;dbname=formcreche", $username, $password);


/* requete sql:

INSERT INTO nomdelatable
VALUES( , , , ,);
*/


/*

LARAGON =
Windows (Syst d'Expl OS, peut aussi être Linus ou Mac)
Apache serveur web (logiciel, soft) tel le serveur ovh mais sur notre machine
MySQL.MariaDB (Sgbd = système de gestion de base de données)
Php (module de Apache(soft))
+ framework php = laravel

$a = 1;  déclaration variable
$b = 1;
define('pi', 3.14); déclaration constante

concaténation = '.' et non '+'
 !=(=) différent en valeur eET en type de variable, pareil pour ==(=)
 && = et || = ou
 pour afficher:  echo("Bonjour!") ou echo($string1) pour afficher une variable

*/


echo('Bonjour!<br><br>');

/* $_GET['....']
   $_GET['....'] dans les crochets, ce qu'on a mis dans les 'name' du formulaire

   on peut créer une variable locale pour éviter de tout réécrire:
   $nom = $_GET['nom'];

   Pour éviter message d'erreur "undifined array..."
   if (isset($_GET[nom])
   il faut d'abord initialiser la variable vide $nom=""
*/

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$portable = $_GET['portable'];
$pro = $_GET['pro'];
$adresse = $_GET['adresse'];
$email = $_GET['email'];
$profession = $_GET['profession'];

$nom2 = $_GET['nom2'];
$prenom2 = $_GET['prenom2'];
$portable2 = $_GET['portable2'];
$pro2 = $_GET['pro2'];
$adresse2 = $_GET['adresse2'];
$email2 = $_GET['email2'];
$profession2 = $_GET['profession2'];

$nomenfant = $_GET['nomenfant'];
$prenomenfant = $_GET['prenomenfant'];
$age = $_GET['age'];

$debut = $_GET['debut'];

$contrat = '';
if (isset($_GET['contrat']))
   $contrat = $_GET['contrat'];

$caf = $_GET['caf'];


$lundi = '';
if (isset($_GET['lundi']))
   $lundi = $_GET['lundi'];
$mardi = '';
if (isset($_GET['mardi']))
   $mardi = $_GET['mardi'];
$mercredi = '';
if (isset($_GET['mercredi']))
   $mercredi = $_GET['mercredi'];
$jeudi = '';
if (isset($_GET['jeudi']))
   $jeudi = $_GET['jeudi'];
$vendredi = '';
if (isset($_GET['vendredi']))
   $vendredi = $_GET['vendredi'];


echo"<b>Parent 1</b><br>";
echo"$nom<br>$prenom<br>$portable<br>$pro<br>$adresse<br>$email<br>$profession<br><br>";
echo"<b>parent 2</b><br>";
echo"$nom2<br>$prenom2<br>$portable2<br>$pro2<br>$adresse2<br>$email2<br>$profession2<br><br>";
echo"<b>Enfant</b><br>";
echo"$nomenfant<br>$prenomenfant<br>$age<br><br>";
echo"<b>Contrat</b><br>";
echo"$debut<br>$contrat<br>$lundi<br>$mardi<br>$mercredi<br>$jeudi<br>$vendredi<br>$caf<br><br>";



/* $nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$portable = $_POST['portable'];
$pro = $_POST['pro'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$profession = $_POST['profession'];

$nom2 = $_POST['nom2'];
$prenom2 = $_POST['prenom2'];
$portable2 = $_POST['portable2'];
$pro2 = $_POST['pro2'];
$adresse2 = $_POST['adresse2'];
$email2 = $_POST['email2'];
$profession2 = $_POST['profession2'];

$nomenfant = $_POST['nomenfant'];
$prenomenfant = $_POST['prenomenfant'];
$age = $_POST['age'];

$debut = $_POST['debut'];

$contrat = '';
if (isset($_POST['contrat']))
   $contrat = $_POST['contrat'];

$caf = $_POST['caf'];


$lundi = '';
if (isset($_POST['lundi']))
   $lundi = $_POST['lundi'];
$mardi = '';
if (isset($_POST['mardi']))
   $mardi = $_POST['mardi'];
$mercredi = '';
if (isset($_POST['mercredi']))
   $mercredi = $_POST['mercredi'];
$jeudi = '';
if (isset($_POST['jeudi']))
   $jeudi = $_POST['jeudi'];
$vendredi = '';
if (isset($_POST['vendredi']))
   $vendredi = $_POST['vendredi'];

*/

$marequete=
"INSERT INTO preinscription
VALUES(0,'$nom','$prenom','$adresse','$portable','$pro','$email','$profession','$nom2','$prenom2','$adresse2','$portable2','$pro2','$email2','$profession2','$nomenfant','$prenomenfant','$age','$debut','$contrat','$caf','$lundi','$mardi','$mercredi','$jeudi','$vendredi'); ";
echo $marequete;

/*$link->query($marequete);*/

$reqPreparee = $link->prepare($marequete);
$reqPreparee->execute();

header('location:./preinscription.html');


?>

