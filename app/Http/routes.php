<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(["middleware" => "auth"], function() {
    Route::get('/home', 'HomeController@index');

    //user management only admin role
    Route::get("/home/users", ["as" => "users.index", "uses" => "UserManagementController@index", "middleware" => ["permission:users-list|user-create|user-edit|user-delete"]]);
    Route::get("/home/users/create", ["as" => "users.create", "uses" => "UserManagementController@create", "middleware" => ["permission:user-create"]]);
    Route::post("/home/users/create", ["as" => "users.store", "uses" => "UserManagementController@store", "middleware" => ["permission:user-create"]]);
    Route::get("/home/users/{id}", ["as" => "users.show", "uses" => "UserManagementController@show", "middleware" => ["permission:users-list|user-create|user-edit|user_delete"]]);
    Route::get("/home/users/{id}/edit", ["as" => "users.edit", "uses" => "UserManagementController@edit", "middleware" => ["permission:user-edit"]]);
    Route::patch("/home/users/{id}", ["as" => "users.update", "uses" => "UserManagementController@update", "middleware" => ["permission:user-edit"]]);
    Route::delete("/home/users/{id}", ["as" => "users.destroy", "uses" => "UserManagementController@destroy", "middleware" => ["permission:user-delete"]]);

    Route::get("/home/permissions", ["as" => "permissions.index", "uses" => "PermissionsController@index", "middleware" => ["permission:permissions-list|permission-create|permission-edit|permission-delete"]]);
    Route::get("/home/permissions/create", ["as" => "permissions.create", "uses" => "PermissionsController@create", "middleware" => ["permission:permission-create"]]);
    Route::post("/home/permissions/create", ["as" => "permissions.store", "uses" => "PermissionsController@store", "middleware" => ["permission:permission-create"]]);
    Route::get("/home/permissions/{id}", ["as" => "permissions.show", "uses" => "PermissionsController@show", "middleware" => ["permission:permission-list|permission-create|permission-edit|permission-delete"]]);
    Route::get("/home/permissions/{id}/edit", ["as" => "permissions.edit", "uses" => "PermissionsController@edit", "middleware" => ["permission:permission-edit"]]);
    Route::patch("/home/permissions/{id}", ["as" => "permissions.update", "uses" => "PermissionsController@update", "middleware" => ["permission:permission-edit"]]);
    Route::delete("/home/permissions/{id}", ["as" => "permissions.destroy", "uses" => "PermissionsController@destroy", "middleware" => ["permission:permission-delete"]]);

    Route::get("/home/posts", ["as" => "posts.index", "uses" => "PostsController@index", "middleware" => ["permission:post-list"]]);
});


