<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Define os idiomas disponíveis. 
 */
$config['available_languages'] = array(
    'english'    => array('locale' => 'en', 'label' => 'Inglês'), 
    'portuguese' => array('locale' => 'pt_BR', 'label' => 'Português')
);

$config['available_editors'] = array('ckeditor'=>'CKEditor', 'tinymce'=>'TinyMCE');

/**
 * Define os tipos de usuário serão permitidos no site. 
 */
$config['users_role'] = array('user' => 'Usuário comum', 'admin' => 'Administrador');

/**
 * Define as views disponíveis para a exibição das listas de postagens.
 */
$config['posts_views'] = array('list' => 'Listagem', 'mosaic' => 'Mosaico');

/**
 * Define as posições dos banners no site para serem listados no 
 * painel de contorle.
 */
$config['banner_positions'] = array('slide' => 'Slide-Show', 'sidebar' => 'Barra lateral');

/**
 * Define os links funcionais para o gerenciador de menu.
 */
$config['funcional_links'] = array(
    'home'      => 'Página inicial',
    'contato'   => 'Página de contato',
    'albuns'    => 'Galeria de fotos',
    'videos'    => 'Galeria de videos',
    'events'    => 'Lista de eventos',
    'pool'      => 'Lista de enquetes',
    'users'     => 'Área do usuário',
    'rss'       => 'Página de RSS',
);