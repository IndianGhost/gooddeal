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

/*
 * =============================================================================
 *          Note : On peut passer des donnees comme 3eme argument par e.g :
 * =============================================================================
Route::view('/', 'Pages.home', [
  'firstName'     =>  'Achraf',
  'familyName'    =>  'Bellaali'
])->name('home');
//Dans l'exemple ci-dessus, on appelle les donnees dans la vue par {{$firstName}} et {{$familyName}}
 * =============================================================================
*/


Route::view('/', 'Pages.home')->name('home');
Route::view('/blog', 'Pages.blog')->name('blog');
Route::view('/contact', 'Pages.contact')->name('contact');
Route::view('/404', 'Pages.404')->name('404');

Route::get('/blog/post/{id}', 'PostController@readPost');