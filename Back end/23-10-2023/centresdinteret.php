<?php
$centresdinteret = [

    'Pâtisserie',
    'Sport - musculation<',
    'Sport - musculation',
    'Lire<',
];
?>
<h3>Centres d'interet<?= count($centresdinteret) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($centresdinteret as $centresdinteret): ?>
        <li><?= $centresdinteret; ?></li>
        <li><?php echo $centresdinteret; ?></li>
    <?php endforeach; ?>
</ul>