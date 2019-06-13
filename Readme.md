This is a readme.

# Projet Tech web & BDD

## 1 - Partie utilisateur

Vous pouvez utiliser 
        - la commande `make start` pour lancer le serveur php en localhost

        - la commande `make db.create` pour créer et importer la bdd du fichier /data/db.sql dans mysql

        - la commande `make db.destroy` pour supprimer la bdd
        
        - ou encore la commande `make db.reset` qui destroy et create la bdd
        
* La connexion PDO sur chaque page php du site est un exemple vous pouvez la modifier pour vous connecter en localhost  *

Sur la premiere page : vous retrouverez une presentation simple d'un CV qui regroupe nom, prénom, photo et compétences clefs

Sur la deuxième page : vous retrouverez une présentation détaillée (un CV numérique interactif) : expériences professionnelles, compétences, rubriques libres 

Sur la troisième page : il y a une liste de Réalisations/Projets

Et la quatrième page : est une page de contact permettant aux visiteurs de vous contacter par le biais d’un formulaire

-----------------------------------------------------------------------------------------------------------------------------------

## 2 - Partie administrateur

A partir de la page * admin.php * vous pouvez entrer un login et un password pour avoir accès à la partie admin du site. En cliquant sur le bouton * admin * vous pouvez modifier les elements du cv sur chaque page à partir de requete SQL.
