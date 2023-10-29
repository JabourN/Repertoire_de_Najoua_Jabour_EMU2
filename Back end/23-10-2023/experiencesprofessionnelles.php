<?php
$experiencesprofessionnelles = [
    'Expériences Professionnelles',
    'Dompteur de licornes - La Ferme Enchantée',
    'Maîtrise de l\'art de la communication avec des créatures mythiques',
    'Assurer que les arcs-en-ciel sont parfaitement alignés',
    'Métamorphose en poney les jours de pluie',
    'Chasseur de trésors - L\'île des Tropiques',
    'Déterrer des coquillages dorés',
    'Négociation avec les crabes pour des échanges équitables',
    'Maître de cérémonie - Cirque des Coccinelles',
    'Présentation de spectacles de coccinelles acrobates',
    'Formation de coccinelles pour des numéros sensationnels',
    'Chercheur de trésors numériques - Le Monde Virtuel',
    'Exploration de donjons en ligne à la recherche de pixels perdus',
    'Combat acharné contre les dragons de bugs informatiques',
];

?>
<h3>Expériences Magiques<?= count($experiencesprofessionnelles) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($experiencesprofessionnelles as $experience): ?>
        <li><?= $experience; ?></li>
    <?php endforeach; ?>
</ul>
