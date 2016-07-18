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

Route::group(["prefix" => "home","middleware" => "auth"], function() {
    Route::get('/home', 'HomeController@index');

    //user management only admin roles
    Route::get("users", ["as" => "users.index", "uses" => "UserManagementController@index", "middleware" => ["permissions:users-list|user-create|user-edit|user-delete"]]);
    Route::get("users/create", ["as" => "users.create", "uses" => "UserManagementController@create", "middleware" => ["permissions:user-create"]]);
    Route::post("users/create", ["as" => "users.store", "uses" => "UserManagementController@store", "middleware" => ["permissions:user-create"]]);
    Route::get("users/{id}", ["as" => "users.show", "uses" => "UserManagementController@show", "middleware" => ["permissions:users-list|user-create|user-edit|user_delete"]]);
    Route::get("users/{id}/edit", ["as" => "users.edit", "uses" => "UserManagementController@edit", "middleware" => ["permissions:user-edit"]]);
    Route::patch("users/{id}", ["as" => "users.update", "uses" => "UserManagementController@update", "middleware" => ["permissions:user-edit"]]);
    Route::get("users/{id}/assignRole", ["as" => "users.assignRoles", "uses" => "UserManagementController@assignForm", "middleware" => ["permissions:users-create"]]);
    Route::post("users/{id}", ["as" => "users.hasRoles", "uses" => "UserManagementController@hasRole", "middleware" => ["permissions:users-create"]]);
    Route::delete("users/{id}", ["as" => "users.destroy", "uses" => "UserManagementController@destroy", "middleware" => ["permissions:user-delete"]]);

    Route::get("roles", ["as" => "roles.index", "uses" => "RolesController@index", "middleware" => ["permissions:role-list|role-create|role-edit|role-delete"]]);
    Route::get("roles/create", ["as" => "roles.create", "uses" => "RolesController@create", "middleware" => ["permissions:role-create"]]);
    Route::post("roles/create", ["as" => "roles.store", "uses" => "RolesController@store", "middleware" => ["permissions:role-create"]]);
    Route::get("roles/{id}", ["as" => "roles.show", "uses" => "RolesController@show", "middleware" => ["permissions:role-list|role-create|role-edit|role-delete"]]);
    Route::get("roles/{id}/edit", ["as" => "roles.edit", "uses" => "RolesController@edit", "middleware" => ["permissions:role-edit"]]);
    Route::patch("roles/{id}", ["as" => "roles.update", "uses" => "RolesController@update", "middleware" => ["permissions:role-edit"]]);
    Route::get("roles/{id}/assign_permissions", ["as" => "roles.assign", "uses" => "RolesController@assignPermissions", "middleware" => ["permissions:role-create|role-edit"]]);
    Route::post("roles/{id}", ["as" => "roles.attachPermission", "uses" => "RolesController@attachPermissions", "middleware" => ["permissions:role-create|role-edit"]]);
    Route::delete("roles/{id}", ["as" => "roles.destroy", "uses" => "RolesController@destroy", "middleware" => ["permissions:role-delete"]]);

    Route::get("permissions", ["as" => "permissions.index", "uses" => "PermissionsController@index", "middleware" => ["permissions:permissions-list|permissions-create|permissions-edit|permissions-delete"]]);
    Route::get("permissions/create", ["as" => "permissions.create", "uses" => "PermissionsController@create", "middleware" => ["permissions:permissions-create"]]);
    Route::post("permissions/create", ["as" => "permissions.store", "uses" => "PermissionsController@store", "middleware" => ["permissions:permissions-create"]]);
    Route::get("permissions/{id}", ["as" => "permissions.show", "uses" => "PermissionsController@show", "middleware" => ["permissions:permissions-list|permissions-create|permissions-edit|permissions-delete"]]);
    Route::get("permissions/{id}/edit", ["as" => "permissions.edit", "uses" => "PermissionsController@edit", "middleware" => ["permissions:permissions-edit"]]);
    Route::patch("permissions/{id}", ["as" => "permissions.update", "uses" => "PermissionsController@update", "middleware" => ["permissions:permissions-edit"]]);
    Route::delete("permissions/{id}", ["as" => "permissions.destroy", "uses" => "PermissionsController@destroy", "middleware" => ["permissions:permissions-delete"]]);

    //module for user roles access only
    Route::get("posts", ["as" => "posts.index", "uses" => "PostsController@index", "middleware" => ["permissions:post-list|post-create|post-edit|post-delete"]]);
    Route::get("posts/create", ["as" => "posts.create", "uses" => "PostsController@create", "middleware" => ["permissions:post-create"]]);
    Route::post("posts/create", ["as" => "posts.store", "uses" => "PostsController@store", "middleware" => "permissions:post-create"]);
    Route::get("posts/{id}", ["as" => "posts.show", "uses" => "PostsController@show", "middleware" => ["permissions:post-list|post-create|post-edit|post-delete"]]);
    Route::get("posts/{id}/edit", ["as" => "posts.edit", "uses" => "PostsController@edit", "middleware" => ["permissions:post-edit"]]);
    Route::patch("posts/{id}", ["as" => "posts.update", "uses" => "PostsController@update", "middleware" => ["permissions:post-edit"]]);
    Route::delete("posts/{id}", ["as" => "posts.destroy", "uses" => "PostsController@destroy", "middleware" => ["permissions:post-delete"]]);
});


