<?php
use App\Http\Controllers\CommentsController;

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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    //Route::middleware('admin')->group(function () {
        Route::prefix('/admin')->group(function () {
            Route::get('/', 'AdminController@index')->name('admin');
            Route::get('/categories', 'AdminController@categories');
            Route::get('/discussions', 'AdminController@discussions');
            Route::get('/tags', 'AdminController@tags');
            Route::get('/users', 'AdminController@users');
            Route::get('/comments', 'AdminController@comments');

            Route::resource('user', 'UsersController');
            Route::resource('categories', 'CategoriesController');
            Route::resource('discussions', 'DiscussionController');
            Route::resource('tags', 'TagsController');
            Route::resource('comments', 'CommentsController');
        });
    // });

    Route::get('/discussions/add', 'DiscussionController@create')->name('addDiscussion');
    Route::get('/category/{id}', 'CategoriesController@show');
    Route::get('/tag/{id}', 'TagsController@show');
    Route::get('/discussion/{id}', 'DiscussionController@show');
    Route::post('discussion/add/comment', 'CommentsController@newComment');
    Route::get('discussion/{id}/add/vote', 'VotesController@addVote');
    Route::get('discussion/{id}/delete/vote', 'VotesController@deleteVote');
    Route::any('/search', 'DiscussionController@search');
    Route::get('admin/discussions/id/{up}', 'FilterController@id');
    Route::get('admin/discussions/title/{up}', 'FilterController@title');
    Route::get('admin/discussions/description/{up}', 'FilterController@description');
    Route::get('admin/discussions/views/{up}', 'FilterController@views');
    Route::get('admin/discussions/author/{up}', 'FilterController@author');
    Route::get('admin/discussions/category/{up}', 'FilterController@category');
});