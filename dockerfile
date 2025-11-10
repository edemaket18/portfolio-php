# Utiliser une image PHP avec serveur intégré
FROM php:8.2-apache

# Copier les fichiers du projet dans le dossier web du conteneur
COPY . /var/www/html/

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 8080 (Render utilise ce port)
EXPOSE 8080

# Lancer Apache
CMD ["apache2-foreground"]
