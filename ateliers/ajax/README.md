# Révisions JS / AJAX

## Objectif

Comprendre le concept de requêtes AJAX et son intéret par rapport à une requête de navigateur normale. Consolider sa connaissance du `$.ajax` et savoir comment l'utiliser et le mieux possible.

## Le cas "normal"

0. Un navigateur demande des informations à un serveur (HTML, JSON, etc...)

0. Le serveur récupère cette requête et fais les traitements de son coté. Une fois le rendu créé, il le retourne dans la réponse de la requête.

0. Le navigateur récupère le résultat de la requête et l'affiche (si c'est du HTML par exemple).

## C'est quoi ton problème ?

AJAX est apparu pour régler un gros problème du web "traditionnel" : **comment faire pour recharger uniquement un morceau de page ?**

En effet, la mécanique classique des sites web ne permet pas de fragmenter la page pour la mettre à jour bloc par bloc (hormis avec les frames mais c'est très moche ! :hankey:)

![Mattez moi ça](https://www.iwantclarity.com/wp-content/uploads/2013/08/website-frames.gif)

## Le fameux web 2.0

> Le Web 2.0 est donc l'évolution du Web vers l'interactivité à travers une complexification interne de la technologie mais permettant plus de simplicité d'utilisation.

Et paf ! AJAX est là et nous permet d'exécuter des requêtes en arrière plan ! Et en fait c'est tout ce que ça fait, mais qu'est ce que c'est bon !

![Meme](https://www.mememaker.net/api/bucket?path=static/img/memes/full/2014/Aug/3/17/omg-its-perfect.jpg)

## C'est parti !

Maintenant qu'on sait la théorie, faut se mettre à la pratique. Pour ça, rien de mieux qu'utiliser un service en ligne qui nous fourni des infos... (http://swapi.co/).

### Le challenge

Créer les requêtes AJAX permettant de récupérer les différentes informations afin de les afficher.


### Ressources

#### jQuery

C'est la base pour faire du javascript rapidement.
- Lien : http://api.jquery.com/
- HTML : `<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>`

#### Materialize

Un autre framework CSS parce qu'il en existe beaucoup d'autres que Bootstrap et que je l'aime bien celui là !
- Lien : http://materializecss.com/
- HTML :
  - `<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">`
  - `<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>`

#### Les icons Material Design

Pour ce mettre plein de petits icônes "sympas" !
- Lien : http://materializecss.com/icons.html
- HTML : `<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">`
