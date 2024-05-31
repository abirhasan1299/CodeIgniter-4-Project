<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/discussion','Home::discussion');
$routes->get('/eventPost', 'Home::eventPost');
$routes->get('/about','Home::About');
$routes->get('page/(:any)','Home::page/$1');
$routes->get('writer/(:any)','Home::writer/$1');

//--------------AUTHENTICATION-----------------------------//

$routes->get('auth/login','Authentication::login');
$routes->post('auth/login','Authentication::login');
$routes->get('auth/forget-password','Authentication::forget');
$routes->get('auth/register','Authentication::register');
$routes->post('auth/save','Authentication::SaveRegister');


//-------------ADMIN PANEL--------------------------------//

$routes->get('admin/','Admin::index');
$routes->post('admin/login','Admin::adminLogin');

$routes->get('admin/logout','Admin::logout');
$routes->get('admin/home','Admin::home',['filter'=>'isAdmin']);
$routes->get('admin/add_writer','Admin::addWriter',['filter'=>'isAdmin']);
$routes->post('admin/add_writer','Admin::addWriter',['filter'=>'isAdmin']);
$routes->get('admin/post','Admin::addPost',['filter'=>'isAdmin']);
$routes->post('admin/post','Admin::addPost',['filter'=>'isAdmin']);
$routes->get('admin/today','Admin::today',['filter'=>'isAdmin']);
$routes->post('admin/today','Admin::today',['filter'=>'isAdmin']);
$routes->get('admin/post-list','Admin::postList',['filter'=>'isAdmin']);
$routes->get('admin/post-edit/(:any)','Admin::postEdit/$1',['filter'=>'isAdmin']);
$routes->post('admin/post-edit-done','Admin::postEditDone',['filter'=>'isAdmin']);
$routes->get('admin/writer-list','Admin::WriterList',['filter'=>'isAdmin']);
$routes->get('admin/writer-edit/(:any)','Admin::WriterEdit/$1',['filter'=>'isAdmin']);
$routes->post('admin/writer-edit-done','Admin::WriterEditDone',['filter'=>'isAdmin']);
$routes->get('admin/writer-delete/(:any)','Admin::WriterDel/$1',['filter'=>'isAdmin']);
$routes->get('admin/post-delete/(:any)','Admin::PostDel/$1',['filter'=>'isAdmin']);

$routes->get('admin/event','Admin::Event',['filter'=>'isAdmin']);

$routes->post('admin/event-post','Admin::EventPost',['filter'=>'isAdmin']);
$routes->get('admin/quote','Admin::quote',['filter'=>'isAdmin']);
$routes->post('admin/quote-post','Admin::quotePost',['filter'=>'isAdmin']);

//---------------------USER PROFILE-----------------------

$routes->get('user/dashboard','Authentication::dashboard',['filter'=>'isLogin']);
$routes->get('auth/logout','Authentication::logout');
$routes->post('user/pray','User::pray',['filter'=>'isLogin']);


