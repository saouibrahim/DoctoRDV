# DoctoRDV
PHP 3rd Semester Project - ISEN

Pour l'uilisation la creation du database doctordv est exigé

drop database if exists doctordv;
CREATE database doctordv;
USE doctordv;

Dans l'interface psql


Apres utiliser cette commande:

psql -U postgres -d doctordv -f data/model.sql

""En supposant que vous utilisé l'utilisateur postgres""


