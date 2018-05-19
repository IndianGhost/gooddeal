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
Route::view('/shop', 'Pages.shop')->name('shop');
Route::view('/blog', 'Pages.blog')->name('blog');
Route::view('/contact', 'Pages.contact')->name('contact');

Route::get('/blog/post/{id}', [
    'as'    =>  'readPost',
    'uses'  =>  'PostController@readPost'
])->where('id', '[1-9]+');

Route::get('/admin/dashboard/', [
    'as'    =>  'adminDashboard',
    'uses'  =>  'adminController@dashboard'
]);

Route::get('/admin/charts/', [
    'as'    =>  'adminCharts',
    'uses'  =>  'adminController@charts'
]);

Route::get('/admin/', [
    'as'    =>  'adminLogin',
    'uses'  =>  'adminController@login'
]);

Route::get('/admin/register', [
    'as'    =>  'adminRegister',
    'uses'  =>  'adminController@register'
]);

Route::get('/admin/forget-password', [
    'as'    =>  'adminForgetPassword',
    'uses'  =>  'adminController@forgetPassword'
]);

Route::get('/admin/logout', [
    'as'    =>  'adminLogout',
    'uses'  =>  'adminController@logout'
]);