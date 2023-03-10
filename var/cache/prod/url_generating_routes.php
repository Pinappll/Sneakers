<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_account_adress' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'app_add_adress' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::add'], [], [['text', '/compte/ajouter-une-adresse']], [], [], []],
    'app_edit_adress' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-une-adresse']], [], [], []],
    'app_delete_adress' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/supprimer-une-adresse']], [], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'app_account_order' => [[], ['_controller' => 'App\\Controller\\AccountOrderController::index'], [], [['text', '/compte/mes-commandes']], [], [], []],
    'app_account_order_show' => [['reference'], ['_controller' => 'App\\Controller\\AccountOrderController::show'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/mes-commandes']], [], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'remove_my_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/cart/remove']], [], [], []],
    'delete_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'decrease_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_order_cancel' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderCancelController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/erreur']], [], [], []],
    'app_order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'app_order_recap' => [[], ['_controller' => 'App\\Controller\\OrderController::add'], [], [['text', '/commande/recapitulatif']], [], [], []],
    'app_order_validate' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderSuccessController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/merci']], [], [], []],
    'app_products' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/produits']], [], [], []],
    'app_product' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/produit']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'app_stripe_create_session' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/create-session']], [], [], []],
];
