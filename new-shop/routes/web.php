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



Route::get('/', [
    'uses' => 'newShopController@index',
    'as' => 'new-shop-home'
]);


Route::get('/category-product', [
    'uses' => 'newShopController@categoryProduct',
    'as' => 'new-shop-category-product'
]);

Route::get('/mail-us', [
    'uses' => 'newShopController@mailUs',
    'as' => 'new-shop-mail-us'
]);



Route::get('/category/add', [
    'uses' => 'CategoryController@addCategory',
    'as' => 'new-shop-add-category'
]);

Route::get('/category/manage', [
    'uses' => 'CategoryController@manageCategory',
    'as' => 'new-shop-manage-category'
]);

Route::post('/category/save', [
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-shop-new-category'
]);

Route::get('/category/unpublish/{id}', [
    'uses' => 'CategoryController@unpublishCategory',
    'as' => 'unpublish-category'
]);

Route::get('/category/publish/{id}', [
    'uses' => 'CategoryController@publishCategory',
    'as' => 'publish-category'
]);

Route::get('/category/edit/category/{id}', [
    'uses' => 'CategoryController@editCategory',
    'as' => 'edit-category'
]);

Route::post('/category/update/category', [
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
]);

Route::get('/category/delete/category/{id}', [
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);


Route::get('/brand/add', [
    'uses' => 'BrandController@addBrand',
    'as' => 'new-shop-add-brand'
]);

Route::get('/brand/manage', [
    'uses' => 'BrandController@manageBrand',
    'as' => 'new-shop-manage-brand'
]);

Route::post('/brand/save', [
    'uses' => 'BrandController@saveBrand',
    'as' => 'new-brand'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
