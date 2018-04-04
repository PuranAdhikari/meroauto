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

    #Posts
    Route::resource('/posts', 'PostsController');
    Route::get('/posts/toggle-status/{id}', 'PostsController@toggleStatus');
    Route::get('/posts/toggle-featured/{id}', 'PostsController@toggleFeatured');
    Route::post('/posts/delete', 'PostsController@bulkDelete');
    Route::get('/posts/slug/{title}', 'PostsController@slug');

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