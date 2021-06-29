# MVC Architecture

Le but de la MVC est de diviser votre application en 3 grandes parties :

### Le Model

Interaction avec la base de données. Il va recevoir, stocker et récupérer les données pour le développeur/utilisateur.

### La View

Affichage des informations à l'utilisateur. Il permet d'intégrer les données envoyées par le controller.

### Le Controller

[Un controller sert à recevoir des requêtes (HTTP) et a y répondre.]
Envoyer et recevoir des données depuis le model et va les passer à la view.


## Structure

La MVC impose une structure des dossiers qui est différente. Un exemple :

- Un dossier de config : Toutes les informations de configuration nécessaires au fonctionnement du site.

- Un dossier public : Le dossier accessible par l'utilisateur. C'est ici que vont se situer les assets mais aussi généralement le index.php d'entrée.

- Un dossier Vendor : C'est le dossier qui contient les dépendances PHP du projet (généralement installée via composer).

**Méthode 1**

- Un dossier qui va regrouper les fichiers sources : C'est un dossier qui va regrouper la logique de la MVC : Models et les Controllers ainsi que le Core.

- Un dossier de templating : C'est le dossier qui va contenir les views.

**Méthode 2**

- Un dossier Models

- Un dossier Controllers

- Un dossier Views

- Un dossier Core : Le dossier qui va contenir tout le coeur de votre architecture. C'est ici qu'on va retrouver les routers et dispatchers.


## Configuration du serveur pour la MVC

Pour configurer le serveur pour la MVC on va utiliser des .htaccess. Le .htaccess va permettre de gérer les requêtes reçues et par exemple réécrire l'URL, ou encore rediriger une requête.
2 htaccess seront nécessaires, un pour la racine qui va rediriger vers le dossier public, et un dans le dossier public qui va réécrire l'URL.


## Créer un router

Créer une class Router qui va avoir une fonction run() qui servira a recevoir la requête HTTP et à la rediriger sur le bon controller et activer la méthode nécessaire.

## Créer des méthodes controller

On va créer un ensemble de méthodes controller qui serviront à recevoir nos requêtes et à les gérer.
Nos premières méthodes sont la méthode home() et la méthode error() qui serviront pour la page d'accueil et la page d'erreur générique.

    - Quelles sont les méthodes controllers à créer ? :
        Par défaut il convient de créer 2 méthodes pour 2 pages au minimum : la page d'accueil et d'erreur. Ensuite on créera des méthodes pour chaque méthode de CRUD.


### Comment créer une nouvelle page ?

- A chaque fois que je veux créer une page je dois :
    - Créer une view (ou réutiliser une view existante en changeant le contenu)
    - Créer une méthode de DAO si c'est nécessaire
    - Créer une méthode dans le controller qui va associer les deux. 
