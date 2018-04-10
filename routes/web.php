<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Authentication Routes
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

# Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
$this->get('/logout', 'Auth\LoginController@logout');

# Administrator routes

$this->get('files/{hash}/{name}', 'Admin\UploadsController@get_file');

$this->group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    $this->get('/', 'BaseController@index');

    #Categories
    $this->resource('/categories', 'CategoriesController');
    $this->get('/categories/toggle-status/{id}', 'CategoriesController@toggleStatus');
    $this->post('/categories/delete', 'CategoriesController@bulkDelete');
    $this->get('/categories/slug/{title}', 'CategoriesController@slug');

    #News
    $this->get('/news/search', 'NewsController@search');
    $this->resource('/news', 'NewsController');
    $this->get('/news/toggle-status/{id}', 'NewsController@toggleStatus');
    $this->get('/news/toggle-featured/{id}', 'NewsController@toggleFeatured');
    $this->post('/news/delete', 'NewsController@bulkDelete');
    $this->get('/news/slug/{title}', 'NewsController@slug');

    #Manufacturers
    $this->get('/manufacturers/search', 'ManufacturerController@search');
    $this->resource('/manufacturers', 'ManufacturerController');
    $this->get('/manufacturers/toggle-status/{id}', 'ManufacturerController@toggleStatus');
    $this->post('/manufacturers/delete', 'ManufacturerController@bulkDelete');
    $this->get('/manufacturers/slug/{name}', 'ManufacturerController@slug');

    #Car Models
    $this->get('/car-models/search', 'CarModelController@search');
    $this->resource('/car-models', 'CarModelController');
    $this->get('/car-models/toggle-status/{id}', 'CarModelController@toggleStatus');
    $this->post('/car-models/delete', 'CarModelController@bulkDelete');
    $this->get('/car-models/slug/{name}', 'CarModelController@slug');

    #Car Variants
    $this->get('/car-variants/search', 'CarVariantController@search');
    $this->resource('/car-variants', 'CarVariantController');
    $this->get('/car-variants/toggle-status/{id}', 'CarVariantController@toggleStatus');
    $this->post('/car-variants/delete', 'CarVariantController@bulkDelete');
    $this->get('/car-variants/slug/{name}', 'CarVariantController@slug');

    #Menus
    $this->resource('/menus', 'MenusController');
    $this->get('/menus/toggle-status/{id}', 'MenusController@toggleStatus');
    $this->post('/menus/delete', 'MenusController@bulkDelete');
    $this->get('/menus/slug/{title}', 'MenusController@slug');

    #Menu Items
    $this->resource('/menu-items', 'MenuItemsController');
    $this->get('/menu-items/toggle-status/{id}', 'MenuItemsController@toggleStatus');
    $this->post('/menu-items/delete', 'MenuItemsController@bulkDelete');
    $this->get('/menu-items/slug/{title}', 'MenuItemsController@slug');

    #Contact Requests
    $this->resource('/contact-requests', 'ContactRequestController');
    $this->post('/contact-requests/delete', 'ContactRequestController@bulkDelete');

    #Users Management
    $this->get('/users/search', 'UsersController@search');
    $this->resource('/users', 'UsersController');
    $this->post('/users/delete', 'UsersController@bulkDelete');

    #Ads Manager
    $this->resource('/ads-manager/categories', 'AdCategoryController');
    $this->get('/ads-manager/categories/toggle-status/{id}', 'AdCategoryController@toggleStatus');
    $this->post('/ads-manager/categories/delete', 'AdCategoryController@bulkDelete');

    $this->resource('/ads-manager/items', 'AdItemController');
    $this->get('/ads-manager/items/toggle-status/{id}', 'AdItemController@toggleStatus');
    $this->post('/ads-manager/items/delete', 'AdItemController@bulkDelete');

    #Uploads
    $this->resource('/uploads', 'UploadsController');
    $this->post('/upload_files', 'UploadsController@upload_files');
    $this->get('/uploaded_files', 'UploadsController@uploaded_files');
    $this->post('/uploads_update_caption', 'UploadsController@update_caption');
    $this->post('/uploads_update_filename', 'UploadsController@update_filename');
    $this->post('/uploads_update_public', 'UploadsController@update_public');
    $this->post('/uploads_delete_file', 'UploadsController@delete_file');

});

#Frontend Routes

$this->group(['namespace' => 'Frontend'], function (){

    #Homepage Route
    $this->get('/', 'NewsController@index');

    #News Routes
    $this->get('/news', 'NewsController@newsListing'); // Sishir Rijal
    $this->get('/news/top', 'NewsController@newsListingTop'); //Sishir Rijal
    $this->get('/{slug}/en', 'NewsController@newsSingleInEnglish'); //Suman Niraula
    $this->get('/{slug}/np', 'NewsController@newsSingleInNepali'); //Suman Niraula
    $this->get('/news/author/{author}', 'NewsController@newsByAuthor'); //Shishir Gartaula
    $this->get('/news/{slug}/en', 'NewsController@newsSingleInEnglish'); //Suman Niraula
    $this->get('/news/{slug}/np', 'NewsController@newsSingleInNepali'); //Suman Niraula
    $this->get('/news/{author}', 'NewsController@newsByAuthor'); //Shishir Gartaula
    $this->get('/news/category/{category}', 'NewsController@newsByCategory'); //Shishir Gartaula
    $this->get('/news/tag/{tagname}', 'NewsController@newsByTagname'); //Sishir Rijal
});