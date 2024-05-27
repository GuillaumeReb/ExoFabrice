<?php
class Ordinateur
{
//Propriétés
public $nom;
public $marque;
public $type;
public $frequence;
public $memoire;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout ordinateur</title>
</head>
<body>
<h1>Ajout d'ordinateur</h1>

<form action="" method="POST">

<label for="marque">Marque</label>
<input type="text" name="marque" id="marque"/>
<br>
<br>
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" />
<br>
<br>
<label for="model">Type</label>
<select name="model" id="model">
    <option value="">PC fixe</option>
    <option value="">Portable</option>
</select>
<br>
<br>
<label for="mem">Mémoire</label>
<input type="text" id="mem" name="mem"></input>
<br>
<br>
<label for="freq">Fréquence</label>
<input type="text" id="freq" name="freq"></input>
<br>
<br>
<input type="submit" value="Envoyer" />

</form>
</body>
</html>