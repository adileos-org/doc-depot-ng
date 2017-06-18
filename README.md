# doc-depot-ng

> Note pour docker
>> toutes les commandes peuvent être préfixées de la commande docker-compose exec php 
 

## prepare application

```shell
composer update
```
## load test data

```shell
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
php bin/console doctrine:fixtures:load --fixtures=src/DocDepot/SiteBundle/DataFixtures
```



