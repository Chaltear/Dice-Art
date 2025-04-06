# Dice-Art

cette application en python permet de transformer une image en dice art.
Si vous ne comprenez pas ce qu'est un dice art, regardez l'exemple ci-dessous
![input](https://github.com/user-attachments/assets/10584fc2-b2bc-4d5f-8b61-c8653704abba)

![output](https://github.com/user-attachments/assets/0721a4c7-020b-4edb-aff7-f9b5db2635f3)


De plus il ets possible de gérer la précision de la transformation (combien de pixels pour un dé/dice)

![Cat03](https://github.com/user-attachments/assets/487136bb-dab9-4afa-a845-21d2cfedda13)
![0](https://github.com/user-attachments/assets/de4e4c66-ac8a-4b99-a509-66f0ae898de3)
![10](https://github.com/user-attachments/assets/961c4662-6484-4da9-a637-d2d4f7c149dc)
![20](https://github.com/user-attachments/assets/d4d9f52f-d4c0-402a-9866-f6d193d49575)
![25](https://github.com/user-attachments/assets/ac5ebf37-bdac-4030-89b9-342c23731424)
![30](https://github.com/user-attachments/assets/21fdb792-668d-4413-b1b8-ea9a4050efdd)


avant de lancer le main.py 
il faut avoir au préalable installer les packer pygame et opencv-python 
via les commandes:
py -m pip install --upgrade pip
py -m pip install opencv-python
/*
l'utilisation du script main.py nécessite l'appel de python dans les fichiers appellé resultat**.php à la ligne 37 


le fichier index.html permet juste la redirection à la page d'accueil

le fichier accueil et la page principale du site. Elle explique ce que fait le site et oblige
l'utilisateur à rentrer ses informations avant de lancer la conversion.
la page d'accueil permet aussi de changer les langues (eng, fra, ger, ita, spa)

les informations à afficher pour chaque langue se situent dans le dossier "lang", 
chaque langue ayant un different ficher .php

en fonction de la langue utilisée par la page d'accueil au moment de la conversion d'image,
l'utilisateur sera renvoyé sur une page resultat differente pour chaque langue (resultat**.php)
c'est cette page de resultat qui va lancer le programme de conversion de l'image avant de l'afficher
elle permet aussi à l'utilisateur de télécharger et partager son image

le dossier logo contient les images logos des differents sites de partage ainsi que le logo de la bannière

de même le dossier flags contient les images des drapeaux des différentes langues disponibles

enfin le dossier convert contient le fichier de conversion main.py et généralement deux fichiers png,
input.png étant l'image envoyé par l'utilisateur
output.png étant l'image après transformation

le fichier main.py prend en variable un argument (envoyé par le fichier resultat**.php) permettant de choisir
la précision de la conversion
