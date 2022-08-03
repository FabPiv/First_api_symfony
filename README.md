# First_api_symfony
  ### Prérequi

*Prérequis sur votre machine pour le bon fonctionnement de ce projet : 
- PHP Version 8.1.8 
- MySQL [Installer MySQL]
- Symfony version 6.0

### Installation

Après avoir cloné le projet avec ``git clone https://github.com/FabPiv/First_api_symfony.git``

Exécutez la commande ``cd First_api_symfony`` pour vous rendre dans le dossier depuis le terminal.


- 4 installer la base de donnée MySQL. 
   Pour paramétrer la création de votre base de donnée, rdv dans le fichier .env du projet, et modifier la variable d'environnement selon vos paramètres : 

  ``DATABASE_URL=mysql://User:Password@127.0.0.1:3306/nameDatabasse?serverVersion=5.7``
  
  
### Configuration


   Puis exécuter la création de la base de donnée avec la commande : ``symfony console doctrine:database:create``

afin d'eviter d'ecrire ces commandes j'ai realisé un script pour inserer de fausses données dans votre bdd, il suffit de taper dans votre console `composer prepare`


- Drop la database                                                              ``symfony console doctrine:database:drop -f``

- Crée la base de donnée(grace au informations inserés dans le fichier .env)     ``symfony console doctrine:database:create``

- Creation du schema sql pour les données                                        ``symfony console doctrine:schema:update -f``

- Chargement des fake data en bdd -n qui signifie que la commande ne requert pas d'autorisation de votre part       ``symfony console doctrine:fixtures:load -n``

### Lancement

Vous pouvez maintenant accéder a l'interface de l'api en vous connectant au serveur : ``symfony server:start``

Pour acceder à l'interface api platform inserer la requete suivante ``http://127.0.0.1:8000/api/docs``

