<?php
$langues = [
    'Français (courant)',
    'Néerlandais (avancé)',
    'Anglais (notions)',
];
?>
<h3>Langues <?= count($langues) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($langues as $langues): ?>
        <li><?= $langues; ?></li>
        <li><?php echo $langues; ?></li>
    <?php endforeach; ?>
</ul>
 