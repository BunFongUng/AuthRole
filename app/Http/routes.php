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

Route::get("error", ["as" => "403", function() {
    return view("errors.403");
}]);

Route::group(["middleware" => "auth"], function() {
    Route::get('/home', 'HomeController@index');

    //user management only admin roles
    Route::get("/home/users", ["as" => "users.index", "uses" => "UserManagementController@index", "middleware" => ["permissions:users-list|user-create|user-edit|user-delete"]]);
    Route::get("/home/users/create", ["as" => "users.create", "uses" => "UserManagementController@create", "middleware" => ["permissions:user-create"]]);
    Route::post("/home/users/create", ["as" => "users.store", "uses" => "UserManagementController@store", "middleware" => ["permissions:user-create"]]);
    Route::get("/home/users/{id}", ["as" => "users.show", "uses" => "UserManagementController@show", "middleware" => ["permissions:users-list|user-create|user-edit|user_delete"]]);
    Route::get("/home/users/{id}/edit", ["as" => "users.edit", "uses" => "UserManagementController@edit", "middleware" => ["permissions:user-edit"]]);
    Route::patch("/home/users/{id}", ["as" => "users.update", "uses" => "UserManagementController@update", "middleware" => ["permissions:user-edit"]]);
    Route::delete("/home/users/{id}", ["as" => "users.destroy", "uses" => "UserManagementController@destroy", "middleware" => ["permissions:user-delete"]]);

    Route::get("/home/roles", ["as" => "roles.index", "uses" => "RolesController@index", "middleware" => ["permissions:role-list|role-create|role-edit|role-delete"]]);
    Route::get("/home/roles/create", ["as" => "roles.create", "uses" => "RolesController@create", "middleware" => ["permissions:role-create"]]);
    Route::post("/home/roles/create", ["as" => "roles.store", "uses" => "RolesController@store", "middleware" => ["permissions:role-create"]]);
    Route::get("/home/roles/{id}", ["as" => "roles.show", "uses" => "RolesController@show", "middleware" => ["permissions:role-list|role-create|role-edit|role-delete"]]);
    Route::get("/home/roles/{id}/edit", ["as" => "roles.edit", "uses" => "RolesController@edit", "middleware" => ["permissions:role-edit"]]);
    Route::patch("/home/roles/{id}", ["as" => "roles.update", "uses" => "RolesController@update", "middleware" => ["permissions:role-edit"]]);
    Route::delete("/home/roles/{id}", ["as" => "roles.destroy", "uses" => "RolesController@destroy", "middleware" => ["permissions:role-delete"]]);

    Route::get("/home/permissions", ["as" => "permissions.index", "uses" => "PermissionsController@index", "middleware" => ["permissions:permissions-list|permissions-create|permissions-edit|permissions-delete"]]);
    Route::get("/home/permissions/create", ["as" => "permissions.create", "uses" => "PermissionsController@create", "middleware" => ["permissions:permissions-create"]]);
    Route::post("/home/permissions/create", ["as" => "permissions.store", "uses" => "PermissionsController@store", "middleware" => ["permissions:permissions-create"]]);
    Route::get("/home/permissions/{id}", ["as" => "permissions.show", "uses" => "PermissionsController@show", "middleware" => ["permissions:permissions-list|permissions-create|permissions-edit|permissions-delete"]]);
    Route::get("/home/permissions/{id}/edit", ["as" => "permissions.edit", "uses" => "PermissionsController@edit", "middleware" => ["permissions:permissions-edit"]]);
    Route::patch("/home/permissions/{id}", ["as" => "permissions.update", "uses" => "PermissionsController@update", "middleware" => ["permissions:permissions-edit"]]);
    Route::delete("/home/permissions/{id}", ["as" => "permissions.destroy", "uses" => "PermissionsController@destroy", "middleware" => ["permissions:permissions-delete"]]);

    //module for user roles access only
    Route::get("/home/posts", ["as" => "posts.index", "uses" => "PostsController@index", "middleware" => ["permissions:post-list|post-create|post-edit|post-delete"]]);
    Route::get("/home/posts/create", ["as" => "posts.create", "uses" => "PostsController@create", "middleware" => ["permissions:post-create"]]);
    Route::post("/home/posts/create", ["as" => "posts.store", "uses" => "PostsController@store", "middleware" => "permissions:post-create"]);
    Route::get("/home/posts/{id}", ["as" => "posts.show", "uses" => "PostsController@show", "middleware" => ["permissions:post-list|post-create|post-edit|post-delete"]]);
    Route::get("/home/posts/{id}/edit", ["as" => "posts.edit", "uses" => "PostsController@edit", "middleware" => ["permissions:post-edit"]]);
    Route::patch("/home/posts/{id}", ["as" => "posts.update", "uses" => "PostsController@update", "middleware" => ["permissions:post-edit"]]);
    Route::delete("/home/posts/{id}", ["as" => "posts.destroy", "uses" => "PostsController@destroy", "middleware" => ["permissions:post-delete"]]);
});


