<?php

use App\Http\Controllers\AnyIdeaController;
use App\Http\Controllers\CurrentIdeaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ScienceIdeaController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');
Route::resource("/users", UserController::class);
Route::resource("/current_idea", CurrentIdeaController::class);
Route::resource("/any_idea", AnyIdeaController::class);
Route::resource("/teams", TeamController::class);
Route::resource("/science_idea", ScienceIdeaController::class);
Route::get('/', [MainController::class, 'index'])->name('home');

Route::post('/{any_idea}', StoreController::class)->name('store');
/*Route::group(['namespace' => 'AnyIdea', 'prefix' => 'any_idea'], function(){
    Route::group(['namespace' => 'Comment', 'prefix' => '{any_idea}'], function (){
        Route::post('/', 'StoreController')->name('any_idea.comment.store');
    });

});*/



//Route::resource("/", AnyIdeaController::class);
