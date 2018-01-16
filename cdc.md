# Cahier des charges de Pantoufland

### Présentation de la société

Pantoufland est une société, récemment créée par Mme Zapatilla, qui se lance dans la vente de chaussons humoristiques spécialement conçus pour une utilisation prolongée :zzz:

Mme Zapatilla souhaite répondre à la demande grandissante de ce type de produits en mettant en place un site de vente en ligne :moneybag:

-----------------

### Expression de besoin

La société Pantoufland souhaite créer une boutique en ligne simple et rapide d'utilisation proposant les éléments suivants :

-----------------

#### Logo

Le nom/logo (non fourni) de la société "Pantouf'land" en haut à gauche du site et visible sur toutes les pages. Lorsqu'on clic dessus, l'utilisateur doit être redirigé sur la page d'accueil du site.

-----------------

#### Page d'accueil

La page d'accueil doit afficher la liste des produits vendus pas la société sous la forme de fiches produits les unes à coté des autres (se référer au wireframe). La disposition des fiches produits doit s'adapter au mieux à la taille de l'écran de l'utilisateur.

Chaque fiche produit contiendra son nom, sa photo, sa description courte, son prix mis en valeur et un bouton "Acheter". Au clic sur ce bouton, le produit doit d'ajouter **dynamiquement** au panier (sans rechargement de page).

**BONUS :star::star::star: :**
Notre catalogue de produits augmentant avec le temps, nous ne souhaitons pas surcharger l'affichage de cette page. Pour cela nous souhaitons la mise en place d'un *infinite scrolling*. 9 produits seront affichés par défaut sur la page et ce n'est qu'au *scroll* de l'utilisateur que la suite des produits s'affichera par pages de 9 (comme sur Facebook et Twitter).

-----------------

#### Le panier

Le site propose des produits que l'utilisateur pourra acheter. Pour cela nous souhaitons la mise en place d'un panier. L'utilisateur pourra choisir plusieurs articles différents au cours de sa navigation ainsi que le nombre d'articles souhaités.

Le panier doit être **affiché constamment** sur la page, si aucun produits n'est présent dans le panier, on se contente d'afficher un message "Aucun produit sélectionné".

Un bouton `Valider` est présent en bas du panier et permet d'accéder à la page de validation de la commande (ce bouton n'est présent que si il y a effectivement des produits dans le panier).

**BONUS :star::star: :**
Nous aimerions, si possible, que l'utilisateur puisse modifier directement dans son panier les quantités souhaitées (peut être avec des petits boutons `+` et `-`), ainsi que la possibilité de supprimer directement un article du panier (tout cela sans rechargement de page).

**BONUS :star: :**
Le panier doit afficher le total de la commande. Se total doit se mettre à jour à chaque ajout/suppression de produit ou modification des quantités.

-----------------

#### Validation de la commande

Nous **ne souhaitons pas** que l'utilisateur puisse créer un compte sur notre site. Ce n'est que lorsqu'il valide son panier qu'il saisira ces informations de commande.

Cette page affichera donc un formulaire où l'utilisateur devra saisir les informations suivantes :
- Nom
- Prénom
- Adresse mail
- Adresse postale
- Commentaire

Hormis le commentaire, tous les autres champs sont obligatoires et une vérification devra être faite avant enregistrement de la commande dans notre base de données.

Le total de la commande doit être affiché sur cette page de façon visible.

Un bouton "J'achète" est présent en bas du formulaire et permet de valider la commande. En cliquant dessus, les informations de la commande doivent être enregistrées dans la base de données et l'utilisateur doit être redirigé vers une page de confirmation qui lui indique que tout c'est bien passé.

> L'utilisateur devra donc saisir ces informations à chaque commande.

**BONUS :star: :**
Un seul champs pour la saisie de l'adresse qui va proposer une auto-completion grâce aux services que Google met à notre disposition. On peut enregistrer également les coordonnées GPS de l'utilisateur qui fait la commande.

-----------------

#### Confirmation de la commande

Une fois que l'utilisateur a validé sa commande, il est redirigé sur une page ou s'affiche le message suivant :

> Votre commande a bien été prise en compte. Vous recevrez vos chaussons dans les plus bref délais !

Un lien sera présent en dessous pour revenir sur la page d'accueil.


**BONUS DU BOSS ULTIME :star::star: :**
Si tout est fonctionnel et joliment stylisé vous pouvez développer un système de comptes utilisateurs au site.

Lorsqu'un utilisateur rempli ses informations dans la page de "Validation de la commande", on lui demande également un mot de passe. Si il revient sur le site, il pourra alors se connecter directement via son adresse mail et mot de passe.

Si il est connecté, les informations de commande seront déjà remplie lorsqu'il validera son panier (sauf le mot de passe !). L'utilisateur pourra modifier ces informations qui seront alors modifiées dans la base de données. Il peut aussi retrouver ses commandes antérieures dans une page "profil".
