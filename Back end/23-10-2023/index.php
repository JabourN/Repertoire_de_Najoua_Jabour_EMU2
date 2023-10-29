<?php
$prenom = 'Barnabé';
$nom = 'Farfelu';

$prenomNom = "$prenom $nom";
$email = strtolower($prenom . '.' . $nom . '@domaine-imaginaire.com');

$adresse = '123, Rue des Nuages, Ville du Rire, Pays des Rêves';

$telephone = '+12 34 56 78 90'; // Numéro de contact magique
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae - <?php echo $prenomNom; ?></title>
</head>
<body>
  <h1>Curriculum Vitae</h1>
  <h2><?php echo $prenomNom; ?></h2>

  <img src="assets/img/farfelu.jpg" alt="<?php echo $prenomNom; ?> en pleine aventure imaginaire">

  <h3>Informations Fantaisistes</h3>
  <ul>
    <li><strong>Nom de l'Explorateur :</strong> <?php echo $nom; ?></li>
    <li><strong>Prénom de l'Intrépide :</strong> <?php echo $prenom; ?></li>
    <li><strong>Date de Naissance :</strong> 1er avril 19XX (Un âge indéfinissable)</li>
    <li><address><strong>Adresse de la Maison des Lutins :</strong> <?php echo $adresse; ?></address></li>
    <li><strong>Téléphone Magique :</strong> <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></li>
    <li><strong>Email Enchanté :</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
  </ul>

  <!-- Le reste de votre CV reste inchangé -->
  
</body>
</html>