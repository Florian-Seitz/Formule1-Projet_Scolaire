<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-fr.php');

echo $twig->render('accueil.twig', [
    'titre' => 'Accueil', /*titre de l'onglet*/
    'texte' => $accueil,
    'lang' => 'fr',
    'langpage' => [
        'index',
        'home-en'
    ]
]);
