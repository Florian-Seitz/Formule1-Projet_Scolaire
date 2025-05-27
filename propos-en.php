<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-en.php');

echo $twig->render('propos.twig', [
    'titre' => 'About', /*titre de l'onglet*/
    'texte' => $propos,
    'lang' => 'en',
    'langpage' => [
        'propos-fr',
        'propos-en'
    ]
]);
