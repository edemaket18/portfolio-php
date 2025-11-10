 # Utilise une image PHP officielle avec Apache
FROM php:8.2-apache

# Copie le code source dans le dossier web du conteneur
COPY . /var/www/html/

# Donne les bons droits d’accès
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80 (utilisé par Render)
EXPOSE 80

# Démarre Apache
CMD ["apache2-foreground"]
