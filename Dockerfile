# Utiliser une image de base PHP avec Apache
FROM php:8.1-apache

# Copier les fichiers du répertoire actuel dans le conteneur
COPY . /var/www/html/

# Exposer le port 80 pour accéder au serveur web
EXPOSE 80