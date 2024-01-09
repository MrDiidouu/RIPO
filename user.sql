
/*
MySQL est un système de gestion de bases de données relationnelles populaire utilisé pour stocker et récupérer des données. La gestion des utilisateurs dans MySQL est cruciale pour garantir et limiter l'accès aux données sensibles.

Structure des utilisateurs:

Chaque utilisateur est identifié par un nom d'utilisateur (username) et associé à un hôte (host) depuis lequel il peut se connecter. La combinaison de l'utilisateur et de l'hôte est unique.
*/
-- Création d'un utilisateur
CREATE USER 'nomutilisateur'@'hote' IDENTIFIED BY 'motdepasse';

-- Modifier le mot de passe d'un utilisateur
ALTER USER 'johnny'@'localhost' IDENTIFIED BY 'nouveaumotdepasse';

-- Renommer un utilisateur
RENAME USER 'johnny'@'localhost' TO 'tommy'@'localhost';

-- Supprimer un utilisateur
DROP USER 'tommy'@'localhost';

-- Voir la liste des utilisateurs
SELECT user FROM mysql.user;

-- Voir l'utilisateur courant
SELECT current_user;

-- Gestion des PRIVILEGES
-- Accorder des privilèges à un utilisateur sur une base de données
GRANT privilege ON database.* TO 'user'@'host';

GRANT ALL ON bdd.* to 'user'@'hote'; /* hote = localhost */

-- Révoquer des privilèges à un utilisateur sur une base de données
REVOKE privilege ON database.* FROM 'user'@'host';
-



