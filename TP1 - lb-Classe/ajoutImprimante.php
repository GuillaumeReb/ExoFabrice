<PRE>
<?php
require_once("./Classes/Ordinateur.php");
require_once("./Classes/Imprimante.php");
require_once("./Classes/Utilisateur.php");


$imprimante1 = new Imprimante;

$imprimante1-> nom = "LBP5200";
$imprimante1-> marque = "Canon";
$imprimante1-> modele = "Laser";
$imprimante1-> ppm = 20;

var_dump($imprimante1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout imprimante</title>
</head>
<body>
    <h1>Ajout d'imprimante</h1>

    <form action="" method="POST">
    
    <label for="marque">Marque</label>
    <input type="text" name="marque" id="marque"/>
    
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" />
    
   
    <label for="model">Model</label>
    <select name="model" id="model">
        <option value="">Laser</option>
        <option value="">Jet d'encre</option>
    </select>
     
    <label for="ppm">PPM:</label>
    <input type="text" id="ppm" name="ppm"></input>
    
  
    <input type="submit" value="Envoyer" />

    </form>
    
</body>
</html>