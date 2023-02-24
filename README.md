# Sneakers
Site de vente e-commerce pour l'épreuve du BTS SIO SLAM
# Pré-requis
- Avoir un serveur de base de données
- installer php
- installer symfony
- installer composer
# Installation du projet
cloner le dossier dans un répertoir à l'aide de la commande :

  - $ git clone https://github.com/Pinappll/Sneakers.git

se déplacer dans le dossier lancer dans le terminal :

  - $ composer install 

Aller sur phpmyadmin créer une base de données nommer sneakers et importer le fichier sneakers.sql

Modifier dans le fichier .env la ligne 31 avec les données de votre de serveur de base donnés

  - DATABASE_URL="mysql://Identifiant:Motdepasse@serveur/sneakers?serverVersion=8&charset=utf8mb4"

Modifier les champs Identfiant, Motdepasse, serveur avec vos informations

Modifier dans le fichier StripeController.php la ligne 22

  - $YOUR_DOMAIN = 'https://127.0.0.1:8002'; -> Mettre votre nom de domaine entre quote ''
  
 #Lancer le projet
 
 Lancer la commande dans le teminal
 
  - $ symfony serve
 









