<?php
use Illuminate\Support\Facades\Route;

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

//frontend
Route::namespace('App\Http\Controllers\Page')->group(function () {
    Route::get('/', 'IndexController@getPage')->name('page.index');
    Route::get('/news', 'NewsController@getPage')->name('page.news');
    Route::get('/team', 'TeamController@getPage')->name('page.team');
    Route::get('/season', 'SeasonController@getPage')->name('page.team');
    Route::get('/history', 'HistoryController@getPage')->name('page.history');
    Route::get('/stream', 'StreamController@getPage')->name('page.stream');
    Route::get('/market', 'MarketController@getPage')->name('page.market');
    Route::get('/forum', 'ForumController@getPage')->name('page.forum');
});


// backend
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function (){

        Route::get('/', 'AdminController@index');

        Route::prefix('menu')->namespace('menu')->group(function (){
            Route::get('/', 'IndexController@index')->name('admin.menu.index');
            Route::get('/create', 'CreateController@create')->name('admin.menu.create');
            Route::post('/', 'StoreController@store')->name('admin.menu.store');
            Route::get('/{menu}', 'ShowController@show')->name('admin.menu.show');
            Route::get('/{menu}/edit', 'EditController@edit')->name('admin.menu.edit');
            Route::patch('/{menu}', 'UpdateController@update')->name('admin.menu.update');
            Route::delete('/{menu}', 'DeleteController@delete')->name('admin.menu.delete');
        });

    Route::prefix('category')->namespace('category')->group(function (){
        Route::get('/', 'IndexController@index')->name('admin.category.index');
        Route::get('/create', 'CreateController@create')->name('admin.category.create');
        Route::post('/', 'StoreController@store')->name('admin.category.store');
        Route::get('/{category}', 'ShowController@show')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController@edit')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController@update')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController@delete')->name('admin.category.delete');
    });

    });