La version mocodo (http://mocodo.wingi.net/) du MCD :

<pre>
films: id, name, release_date
especes: id, name
:
planetes: id, name, rotation, revolution, diameter

apparaitre, 1n [film] films, 1n [personnage] personnages
appartenir, 11 personnages, 1N [espece] especes
provenir, 11 personnages, 1n [planete] planetes
posséder, 1N [planete] planetes, 1n [climat] climats

personnages: id, name, weight, size
::
climats: id, name
</pre>
