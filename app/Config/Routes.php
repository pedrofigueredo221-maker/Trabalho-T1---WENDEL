<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Posts::inicio');
$routes->get('post/(:num)', 'Posts::visualizar/$1');
$routes->get('painel/posts', 'Posts::index');
$routes->match(['get', 'post'], 'painel/posts/inserir', 'Posts::inserir');
$routes->match(['get', 'post'], 'painel/posts/editar/(:num)', 'Posts::editar/$1');
$routes->post('painel/posts/excluir/(:num)', 'Posts::excluir/$1');
