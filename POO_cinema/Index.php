<!DOCTYPE html>
<html lang="fr">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exo cinema</title>
</head>

<body>


    <header>
        <h1> POO Cinema </h1>
    </header>


    <main>
        <p>
            Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
            Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que
            leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)
            pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
            cinématographique (science-fiction, aventure, action, ...). <br>
            Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
            nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué
            par l’acteur dans le(s) film(s) concerné(s). <br>
            Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où
            le mettre en place !
        </p>

        <h3>Attention!</h3>

        <ul>
            <li>
                Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où
                e rôle a été incarné par plusieurs acteurs)
            </li>
        </ul>
        <p>On doit pouvoir</p>

        <ul>
            <li>Lister la liste des acteurs ayant incarné tel rôle</li>
            <li>Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>
            <li>Lister les films par genre (exemple : dans le genre G1 il y a X films : Star Wars, Blade Runner, ...)</li>
            <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
            <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
        </ul>

        <h2>Resultat</h2>

        <?php

        spl_autoload_register(function ($class_name) {
            require 'class/' . $class_name . '.php';
        });


        $A1 = new Acteur("Nom1", "Prenom1", "M", "1800-10-11");
        $A2 = new Acteur('Nom 2', 'Prenom 2', 'M', '1950-11-26');
        $A3 = new Acteur('Nom 3', 'Prenom 3', 'M', '1972-05-20');

        $R1 = new Realisateur('Nom 1', 'Prenom 1', 'M', '1955-05-20');
        $R2 = new Realisateur('Nom 2', 'Prenom 2', 'M', '1985-12-12');

        $G1 = new Genre('Science-fiction');
        $G2 = new Genre('Comédie');
        $G3 = new Genre('drame');

        $F1 = new Film('FILM 1', '2012-12-12', 128, $R1, 'TEXT', $G1);
        $F2 = new Film('FILM 2', '1996-06-20', 64, $R1, 'TEXT', $G2);
        $F3 = new Film('FILM 3', '1939-09-11', 32, $R2, 'TEXT', $G3);

        $Role1 = new Role('ROLE 1');
        $Role2 = new Role('ROLE 2');
        $Role3 = new Role('ROLE 3');

        $c1 = new Casting($Role1, $A1, $F1);
        $c2 = new Casting($Role1, $A2, $F1);
        $c3 = new Casting($Role2, $A3, $F2);
        $c3 = new Casting($Role3, $A3, $F3);

        ?>

        <section>
            <h2>Réalisateur</h2>
            <div>
                <?php
                $R1->showReal();
                $R2->showReal();
                ?>
            </div>
        </section>

        <section>
            <h2>Acteur</h2>
            <div>
                <?php
                $A3->showFilmo();
                $A1->showFilmo();
                ?>
            </div>
        </section>
        <section>
            <h2></i>Genre</h2>
            <div>
                <?php
                $G1->showGenre();
                $G3->showGenre();
                ?>
            </div>
        </section>
        <section>
            <h2></i>Rôle</h2>
            <div>
                <?php
                $Role1->showRole();
                $Role2->showRole();
                $Role3->showRole();
                ?>
            </div>
        </section>
        <section>
            <h2></i>Casting</h2>
            <div>
                <?php
                $F1->showCasting();
                $F3->showCasting();
                ?>
            </div>
        </section>
    </main>
</body>
</html>