# Dice-Art

cette application en python permet de transformer une image en dice art.
Si vous en comprenez pas ce qu'est un dice art, regardez l'exemple ci-dessous

![input](https://github.com/user-attachments/assets/50c1dd1f-62ee-4485-9b6c-a494b5d64126)

![output](https://github.com/user-attachments/assets/be6b02be-5f88-46b3-8065-570f58c895c5)

De plus il ets possible de gérer la précision de la transformation (combien de pixel pour un dé/dice)


avant de lancer le main.py 
il faut avoir au préalable installer les packer pygame et opencv-python 
via les commandes:
py -m pip install --upgrade pip
py -m pip install opencv-python
/*
l'utilisation du script main.py nécessite l'appel de python dans les fichiers appellé resultat**.php à la ligne 37 


le fichier index.html permet juste la redirection à la page d'accueil

le fichier accueil et la page principale du site. Elle explique ce que fait le site et oblige
l'utilisateur à rentrer ses information avant de lancer la conversion.
la page d'accueil permet aussi de changer les langues (eng, fra, ger, ita, spa)

les information à afficher pour chaque langue se situent dans le dossier "lang", 
chaque langue ayant un different ficher .php

en fonction de la langue utiliser par la page d'accueil au moment de la conversion d'image,
l'utilisateur sera renvoyé sur une page resultat differente pour chaque langue (resultat**.php)
c'est cette page de resultat qui va lancer le programme de conversion de l'image avant de l'afficher
elle permet aussi à l'utilisateur de télécharger et partager son image

le dossier logo contient les images logos des differents site de partage ainsi que le logo de la banniere

De meme le dossier flags contient les images des drapeaux des différentes langues disponibles

Enfin le dossier covert contient le fichier de conversion main.py et généralement deux fichiers png,
input.png etant l'image envoyer par l'utilisateur
output.png etant l'image apres transformation

le fichier main.py prend en variable un argument (envoyé par le fichier resultat**.php) permettant de choisir
la précision de la conversion
