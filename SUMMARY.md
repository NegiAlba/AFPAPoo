
# Projet Blog/Réseau Social POO

**Création de posts (sans uploads d'images) par des utilisateurs inscrits**

- Visiteurs peuvent s'inscrire/se connecter via un formulaire d'inscription/connexion.
- Visiteurs peuvent voir les posts sans s'inscrire.
- Utilisateurs peuvent créer,éditer supprimer des posts (leurs posts).
- _Administrateurs peuvent gérer les utilisateurs_

### Pattern Factory : On va utiliser des classes qui permettront de créer des objets.


## Structure

- User : email [VARCHAR - 255], password [VARCHAR - 255 hashed], username [VARCHAR - 18] (OK)
- UserDAO # Data Access Objects - Les objets qui servent a accéder aux données des users
- Post : content [TEXT], createdAt [datetime], author [ManyToOne - User] (OK)
- PostDAO # Data Access Objects - Les objets qui servent a accéder aux données des posts

## Fonctionnement du site

- **Page de connexion/inscription (connexion user)** : Méthodes connect/disconnect/signup

- **Page d'accueil affiche tous les posts dans l'ordre descendant (c'est à dire le plus récent en premier)** : Une méthode findAll pour les posts


- **Page de création de posts (ou alors un formulaire de création qui s'affiche sur la page d'accueil si on est connectés)** : Une méthode createPost

- Page de profil qui permet de consulter ses propres posts/ceux d'un utilisateur spécifique

### Marche à suivre

- Création classes (OK) (Propriétés + Getters & Setters + Construct & Hydrate )
- Création BDD (OK)
- Mise en place de l'UI (OK)
- Mise en place de la logique du social network
    - Inscription : Création du formulaire en HTML + Création d'une page qui récupère les données POSTées via form et assainit les variables + Création d'une méthode d'inscription dans UserDAO qui réalise la requête d'insertion après vérification dans la BDD.
    - Lecture des posts : Création d'une méthode de lecture des posts (findAll depuis la BDD)