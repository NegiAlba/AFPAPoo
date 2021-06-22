# PHP Programmation Orientée Objet

## Ce qu'elle apporte

La programmation orientée objet apporte de la structure. Cela permet de créer un standard de développement au niveau personnel mais aussi, et surtout au niveau professionnel.
Ce sera plus facile de coder en équipe en passant par de l'orienté objet.

## La différence avec le procédural

- Création d'une structure au prélable
- Meilleure encapsulation et sécurisation des données

## Principes de base de la POO

- Abstraction : La façon de déterminer les informations nécessaires pour une entité dans le monde extérieur

- Héritage : Le concept de la hiérarchisation du débit de données. Les données devront naviguer du haut vers le bas.

- Encapsulation : Le concept qui permet de décider les données qui navigueront verticalement. (Visibilité
)
- Polymorphisme : Le concept qui permet de déterminer les changements de comportements en lien avec le besoin créé par l'héritage.

Input -> [POO] -> Output

Parent : Utilisateur -> Enfant : Admin & Modérateur

## Composants de la POO

### Classes

Les classes sont la façon de déterminer la structure des données. C'est le squelette de ces données.

  - **Propriétés** : Ce sont les variables que chaque objet (ou instances) de la classe vont posséder.
  - **Accesseurs/Modificateurs** (Getters/Setters) : Ce sont les fonctions de base qui permettent d'accéder et de modifier les propriétés des objets.
  - **Méthodes** : Ce sont les fonctions propres à cette classe que chaque objet (ou instance) de la classe vont posséder. Les méthodes peuvent être surchargées (pensez overwrite) par leurs enfants pour créer une méthode du même nom.
  - **Constructeur** : C'est une fonction qui sert lors de la création de chaque objet propre à la classe. Elle permet de définir des valeurs de base pour chaque objet.

  - **Modificateurs d'accès** : Les modificateurs ce sont les mots-clés que l'on retrouve avant les propriétés et méthodes de nos classes qui permettent de déterminer la visibilité de ces propriétés/méthodes. **private** : C'est le modificateur qui est le plus restrictif puisqu'il empêche l'accès à l'extérieur de la classe mais aussi lors de l'héritage. **public** : C'est le modificateur le moins restrictif puisqu'il permet l'accès à l'extérieur de la classe mais aussi lors de l'héritage. **protected** : C'est le modificateur qui est conseillé pour l'héritage puisqu'il empêche l'accès à l'extérieur de la classe mais permet l'accès lors de l'héritage.

  - **Héritage** : Une classe peut hériter d'une autre classe et récupérer toutes les propriétés et méthodes qui sont publiques ou protected. Cette héritage permet une hiérarchisation de l'application.
  
  - **Abstraction** : On peut créer des classes abstraites qui ne sont pas instantiables, mais qui permettent de définir le squelette des classes qui vont hériter de celle-ci.

### Objets

Les objets sont un type de données primitive, qui permettent d'instancier la classe. Cela signifie que la classe devient concrète pour un cas précis.

