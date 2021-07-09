# SQL EXERCICES

## Configuration de l'environnement de travail

- Clonez ce *repository*. 
- En local, dans phpMyAdmin, créez une base de données intitulée « db_mockdata », choisissez comme interclassement « utf8_general_ci » ;
- Importez le fichier « mock_data.csv » présent sur ce *repository*. Dans les options d'importation, choisissez « utf8 » comme jeu de caractères du fichier, définissez comme nom pour la nouvelle table « table_mockdata » et cochez la *checkbox* « *The first line of the file contains the table column names* » (la première ligne du fichier contient le nom des colonnes de la table) ;
 - Exécutez l'import ;
- Cliquez sur la table, puis sur « Parcourir » pour vérifier les données présentes dans la table : si la première ligne a bien donné son nom aux colones, il est possible qu'elle se soit aussi importée comme une ligne dans la table... on va donc la supprimer. En SQL !
- Dans l'onglet « SQL », tapez « `DELETE FROM table_mockdata WHERE id LIKE 'id'` puis excécutez la requête. Confirmez.
- Dans l'onglet « Structure », modifiez le champs « id » : type *int*, *Not Null*, *Auto-increment* : `« ALTER TABLE table_mockdata CHANGE id id INT(4) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (id);` »
- Changer les valeurs de vos *varchar* pour 255 afin de pouvoir faire vos requêtes d'insertion...

> « *mock data* » se traduit en  français par « données fictives » : les données contenue dans cette base de donnée ne sont évidemment pas réelles !
## Défis

Écrivez la requête SQL pour  :

- Afficher tous les gens dont le nom est « Palmer » ;
- Afficher toutes les femmes ;
- Afficher tous les États dont la lettre commence par « N » ;
  - Afficher tous les États qui ont un « N » dans leur *country code* ;
  
- Afficher tous les emails qui contiennent google ;
SELECT * FROM `table_mockdata` WHERE `email` LIKE '%google%'

-> Permet de cherche toutes les occurences du mot google dans la colonne email. les % permettent d'afficher les occureces google.

  - N'affichez que les personnes dont les emails ne contiennent pas « google » ; 

- Insérer un nouvel utilisateur ;

$sql= 'INSERT INTO `table_mockdata`(`first_name`, `last_name`, `email`, `gender`, `ip_address`, `birth_date`, `zip_code`, `avatar_url`, `state_code`, `country_code`) VALUES ('romain','pois','r.poissonnier@codeur.online','192.168.1.60','male','05/08/91','21000','http://halles-cornouaille.com','21','58000')'


  - Mettre à jour l'adresse mail du nouvel utilisateur ;
  - Supprimer le nouvel utilisateur ;
- Afficher le nombre de femmes et d'hommes ;
- Afficher l'âge de chaque personne ;
- Afficher la moyenne d'âge des femmes et la moyenne d'âge des hommes ;
- Afficher la répartition par État ;
  - Classer la répartition par État par ordre croissant ;
- Créer deux nouvelles tables : une qui contient l'ensemble des membres de l'ACS, l'autre qui contient les département de naissance de chacun (avec numéros et nom écrit) ;
  - Afficher le nom de chaque apprenant avec son département de naissance ;

> Pour réussi cet exercice, utiliser l'excellent site [sql.sh](https://sql.sh/) !
