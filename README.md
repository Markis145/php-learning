# php-learning

require: introdueix codi d'un fitxer diferent a un mateix

sensible-browser index.php -> obrir navegador


php -S localhost:8080 -> obrir servidor

##SEPARATION OF CONCERNS
separar el que veu l'usuari (vistes) en el que veiem nosaltres (controladors, etc)

HTTP -> Hypertext transfer protocol <- xarxes

HTTP -> entre softwares

CLIENT (BROWSER/navegador) (html+css+javascript) -> SERVIDOR (Apache/Nginx) (.php)

PROTOCOL MISSATGES (2 MISSATGES)                                
-HTTP REQUEST -> client->servidor               
-HTTP RESPONSE -> servidor->client (PUSH)

PROTOCOL MISSATGES (TIPUS/METHODS)
- GET -> per defecte
- POST
- DELETE
- PUST

sudo cat /etc/mysql/debian.cnf

- Refactorització de control·ladors: en comptes de fitxers utilitzar classes
    - https://laracasts.com/series/php-for-beginners/episodes/23
- Utilitzar a totes les classes l'espai de noms (namespace) App
    - https://laracasts.com/series/php-for-beginners/episodes/24
- Crear un formulari per afegir tasques (només preguntar nom)
    - https://laracasts.com/series/php-for-beginners/episodes/20
    - Inserts a la base de dades
    - OCO: cal canviar router i routes per acceptar GET i POST
    
Solució final: 
https://github.com/laracasts/The-PHP-Practitioner-Full-Source-Code