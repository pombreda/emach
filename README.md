## Le repository officiel de peanut v2 ##

peanut est un projet opensource sous licence MIT développé par Alexandre Balmes. peanut est basé sur le framework symfony et a pour but de vous permettre
de créer votre site internet à travers un CMS orienté professionnel et pouvant évoluer simplement avec les besoins de votre entreprise.

Ainsi, n'importe quel développeur web ayant des bases suffisantes avec le langage PHP peut après une formation au framework symfony, ajouter des
fonctionnalités propres à vos besoins.

Chaque branche disponible sur ce repository représente une version avec des fonctionnalités différentes. Actuellement, deux branches sont disponibles :

- master : Permet de créer un site vitrine avec backoffice complet
- i18n : Identique à master avec une prise en charge multilingue

D'autres branches vont êtres ajoutées (déclinées à chaque fois en une version simple et une version multilingue) :

- actu : Identique à master avec prise en charge d'une partie actualité
- blog : Une nouvelle application permettant de proposer un blog
- extranet : Une nouvelle application permettant de proposer un extranet


__Première installation__

Vous pouvez utiliser deux scripts shell afin de mettre en place peanut. Dans votre console lancer successivement les commandes `sh bin/update.sh --install`
 `sh bin/configure.sh` vous permettra respectivement de charger les vendors et plugins puis de configurer les différents éléments importants (comme 
le databases.yml et le properties.ini).

Pour mettre à jour les dépendances, refaites un `sh bin/update.sh`.


__Configuration du fichier hosts et des vhosts__

Editez votre fichier `/etc/hosts` et ajouter la ligne suivante :

    127.0.0.1   domain.tld www.domain.tld admin.domain.tld

Editez votre fichier contenant vos vhosts pour ajouter un vhost sur le schema suivant :

    <VirtualHost *:80>
      DocumentRoot "/var/www/domain.tld/web"

      ServerName domain.tld
      ServerAlias www.domain.tld admin.domain.tld

      ServerAdmin me@domain.tld

      DirectoryIndex index.php
      <Directory "/var/www/domain.tld/web">
        AllowOverride All
        Allow from All
      </Directory>

      Alias /sf /var/www/domain.tld/lib/vendor/symfony/data/web/sf
      <Directory "/var/www/domain.tld/lib/vendor/symfony/data/web/sf">
        AllowOverride All
        Allow from All
      </Directory>
    </VirtualHost>

__Accès au backoffice__
Pour accéder au backoffice, rendez-vous sur http://admin.domain.tld et utilisez les identifiants et mots de passe suivants : admin / admin

__Support__

Aucun support n'est disponible en dehors du bug tracker de github et pourquoi pas twitter (avec le temps). Vous pouvez cependant me contacter par mail et
je vous orienterais vers l'entreprise dans laquelle je travaille en tant que chef de projet multimédia.