<?php
    $heure = "24"; // exemple
    if ($heure >= 0 && $heure <12) {
        echo "Matin";
    } elseif ($heure >= 12 && $heure < 18) {
        echo "Midi";
        } else {
      echo "Nuit";
    } 
?>