# Examen du 27 mai

## Installation

`composer install` ou `php composer.phar install` selon votre installation de Composer (https://getcomposer.org/)

Copiez le fichier `config/secret.php.dist` vers `config/secret.php` (nouveau fichier)

Le schéma de base de donnée de l'application est disponible dans le fichier `schema/crossing.sql`.  

Faites pointer le dossier public vers `public`.

Ex : `php -S 0.0.0.0:8000 -t public`

Rendez vous sur `http://localhost:8000`  


## Principe de l'app

- Créez des villages  
- Créez des villageois  
- Créez des fermes dans les villages (1 ferme par village maximum)
- Créez des marchés dans les villages (1 marché par village maximum)

À chaque tour (appuie sur le bouton "tour suivant") :
- Un villageois se déplace dans un autre village ou reste sur place  (aléatoirement)
- Chaque ferme produit 3 navets supplémentaires
- Chaque villageois se trouvant dans une ville où il y a des navets, en reçoit 1 dans la limite des stocks disponibles
- Chaque villageois se trouvant dans une ville où il y a un marché vend ses navets et reçoit 1 clochette par navet

## Déroulement de l'examen

- Forker le repository (publiquement)  
- Cloner votre repository localement  
- Installez le projet  
- Modifiez ce fichier pour y mettre votre nom dans la section "Rendu" ci-dessous
- Faîtes un premier commit à l'issue de ce changement  
- Push (pour vérifier que tout va bien)  
- Corrigez les erreurs du projet  
- Faîtes, dans la mesure du possible, 1 commit par erreur corrigée (les erreurs sont souvent en cascade)  
- Ne faîtes pas de push avant la fin de l'examen (pour que vos camarade ne puissent pas copier !)  


## Rendu

Ce repository a été créé par [Ilan JOURNO].  
Je déclare sur l'honneur n'avoir pas triché et n'avoir fait appel à l'aide d'aucun de mes camarades.




