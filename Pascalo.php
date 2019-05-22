<?php

/**
 * Création du triangle
 *
 * @param $taille
 * @return array
 */
function creation($taille)
{
    $triangle[] = array(1);

    for ($i = 1; $i < $taille; $i++) {
        $ligne = array(1, 0);

        for ($j = 1; $j < $i; $j++) {
            $ligne[$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
        }
        $ligne[$i] = 0;
        $triangle[] = $ligne;
    }
    return $triangle;
}

/**
 * Affichage du triangle.
 *
 * @param $taille
 */
function afficher($taille)
{
    $triangle = creation($taille);

    echo "<pre>";
    foreach ($triangle as $key=>$ligne) {
        foreach ($ligne as $case) {
            if ($case != 0 AND $key != 0)
            {
                printf("%-9s", "[ $case ]");
            }
        }
        echo "<br/>";
    }
    echo "</pre>";
}

/**
 * Test des fonctions.
 */
afficher(20);
