<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-en.php');

echo $twig->render('accueil.twig', [
    'titre' => 'Home', /*titre de l'onglet*/
    'texte' => $accueil,
    'lang' => 'en',
    'langpage' => [
        'index',
        'home-en'
    ]
]);
