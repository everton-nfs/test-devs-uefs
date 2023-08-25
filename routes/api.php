<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function(){
//     return response()->json([
//         'sucess' => true
//     ]);
// });

Route::get('users', [UserController::class, 'getAllUsers']); // Listar usuários
Route::get('users/posts', [UserController::class, 'getAllUsersAndPosts']); // Listar usuários com suas postagens
Route::get('users/{id}', [UserController::class, 'getUserById']); // Exibir um usuário por id
Route::post('users', [UserController::class, 'createUser']); // Criar um novo usuário
Route::put('users/{id}', [UserController::class, 'updateUser']); // Atualizar um usuário
Route::delete('users/{id}', [UserController::class, 'deleteUser']); // Deletar um usuário

Route::get('posts', [PostController::class, 'getAllPosts']); // Listar postagens
Route::get('posts/{id}', [PostController::class, 'getPostById']); // Exibir uma postagem por id
Route::post('posts', [PostController::class, 'createPost']); // Criar uma nova postagem
Route::put('posts/{id}', [PostController::class, 'updatePost']); // Atualizar uma postagem
Route::delete('posts/{id}', [PostController::class, 'deletePost']); // Deletar uma postagem

