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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

# Administrator routes

Route::get('files/{hash}/{name}', 'Admin\UploadsController@get_file');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'BaseController@index');

    #Categories
    Route::resource('/categories', 'CategoriesController');
    Route::get('/categories/toggle-status/{id}', 'CategoriesController@toggleStatus');
    Route::post('/categories/delete', 'CategoriesController@bulkDelete');
    Route::get('/categories/slug/{title}', 'CategoriesController@slug');

    #News
    Route::resource('/news', 'NewsController');
    Route::get('/news/toggle-status/{id}', 'NewsController@toggleStatus');
    Route::get('/news/toggle-featured/{id}', 'NewsController@toggleFeatured');
    Route::post('/news/delete', 'NewsController@bulkDelete');
    Route::get('/news/slug/{title}', 'NewsController@slug');

    #Menus
    Route::resource('/menus', 'MenusController');
    Route::get('/menus/toggle-status/{id}', 'MenusController@toggleStatus');
    Route::post('/menus/delete', 'MenusController@bulkDelete');
    Route::get('/menus/slug/{title}', 'MenusController@slug');
    
    #Menu Items
    Route::resource('/menu-items', 'MenuItemsController');
    Route::get('/menu-items/toggle-status/{id}', 'MenuItemsController@toggleStatus');
    Route::post('/menu-items/delete', 'MenuItemsController@bulkDelete');
    Route::get('/menu-items/slug/{title}', 'MenuItemsController@slug');
    
    #Uploads
    Route::resource('/uploads', 'UploadsController');
    Route::post('/upload_files', 'UploadsController@upload_files');
    Route::get('/uploaded_files', 'UploadsController@uploaded_files');
    Route::post('/uploads_update_caption', 'UploadsController@update_caption');
    Route::post('/uploads_update_filename', 'UploadsController@update_filename');
    Route::post('/uploads_update_public', 'UploadsController@update_public');
    Route::post('/uploads_delete_file', 'UploadsController@delete_file');

});

#Frontend Routes

Route::group(['namespace' => 'Frontend'], function (){

    #Homepage Route
    Route::get('/', 'NewsController@index');

    #News Routes
    Route::get('/news', 'NewsController@newsListing'); // Sishir Rijal
    Route::get('/news/top', 'NewsController@newsListingTop'); //Sishir Rijal
    Route::get('/{slug}/en', 'NewsController@newsSingleInEnglish'); //Suman Niraula
    Route::get('/{slug}/np', 'NewsController@newsSingleInNepali'); //Suman Niraula
    Route::get('/news/author/{author}', 'NewsController@newsByAuthor'); //Shishir Gartaula
    Route::get('/news/{slug}/en', 'NewsController@newsSingleInEnglish'); //Suman Niraula
    Route::get('/news/{slug}/np', 'NewsController@newsSingleInNepali'); //Suman Niraula
    Route::get('/news/{author}', 'NewsController@newsByAuthor'); //Shishir Gartaula
    Route::get('/news/category/{category}', 'NewsController@newsByCategory'); //Shishir Gartaula
    Route::get('/news/tag/{tagname}', 'NewsController@newsByTagname'); //Sishir Rijal



});