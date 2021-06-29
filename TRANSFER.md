# Comment passer du procédural à la MVC en POO

## Etapes à Suivre

- **Modéliser du Projet** : Schématiser la structure et le fonctionnement du projet de la manière la plus précise possible

- Créer les fichiers de configuration (config.php, dev.php, .env etc.)

- Créer la structure du projet (Dossiers)

- Créer les classes (+ ajouter un autoloader)
    - Créer les models
    - **Vérifier/Editer la BDD** : Vérifier que la BDD est dans un format propre
    - Créer les controllers (Pas nécessaires de les remplir)
    - Créer le routeur
    - Générer l'autoloader avec composer
    - Créer les views (Simplement reproduire les pages utilisées, sans la logique forcément.)
    - Créer les Objets d'Accès aux Données (DAO) et ajuster les controllers

- Créer l'entrypoint de mon application (public/index.php) : L'entrypoint définit le point d'entrée de la logique serveur. Toutes les opérations PHP vont passer par cet entrypoint. En réalité ce qui nous importe le plus c'est côté serveur de notre projet. C'est le fichier qui va faire le lien entre le router, l'autoloader et l'environnement. **Créer les htaccess pour les redirections sur index.php**

- Créer le fonctionnement du site => Créer les méthodes relatives au fonctionnalités à implémenter dans le site, et les insérer dans des controlleurs afin qu'ils combinent les models et les views.

[Cycle Prod]
- Tester la sécurité avant une mise en prod. (Aller sur le site et tester diverses failles)
- Partager une version de test avant la mise en prod.
- Mise en production
- Corriger les bugs éventuels

[Cycle Prod]

