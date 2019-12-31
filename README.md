# UltimateStore

Application pour le magasin imaginaire UltimateStore pour la formation Simplon Boulogne-sur-mer.

## Consignes

Réaliser un CRUD avec une *entity* **Product** dont les attributs sont:

- id
- enabled (isEnabled c'est detecter directement comme un boolean par make:entity)
- name
- description
- quantity
- price
- created_at
- updated_at
- img
- alt

Mettre en place des dataFixtures pour la class Product

## Theme

- [Amado - Free Multipage e-commerce Template](https://themewagon.com/themes/free-html5-e-commerce-template-bootstrap4)
- [Product Admin - Free HTML5 admin dashboard template](https://themewagon.com/themes/free-html5-admin-dashboard-template-product-admin)

## Installation

```sh
git clone https://github.com/bastienrc/sc-eval.git
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Le CRUD est visible sur **localhost:8000/admin**.

## Test de Git Flow

[GitFlow : la méthodologie et la pratique](https://blog.nathanaelcherrier.com/fr/gitflow-la-methodologie-et-la-pratique)
