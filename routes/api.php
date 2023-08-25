<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

// Route::get('/', function(){
//     return response()->json([
//         'sucess' => true
//     ]);
// });


Route::get('users', [UserController::class, 'getAllUsers']); // Listar usuários
Route::get('users/posts', [UserController::class, 'getAllUsersAndPosts']); // Listar usuários com suas postagens
Route::get('users/posts-tags', [UserController::class, 'getAllUsersAndPostsAndTags']); // Listar usuários com postagens e tags
Route::get('users/{id}', [UserController::class, 'getUserById']); // Exibir um usuário por id
Route::get('/users/{id}/posts-tags', [UserController::class, 'getUserByIdWithPostsAndTags']); // Pegar usuário por ID com postagens e tags
Route::post('users', [UserController::class, 'createUser']); // Criar um novo usuário
Route::put('users/{id}', [UserController::class, 'updateUser']); // Atualizar um usuário
Route::delete('users/{id}', [UserController::class, 'deleteUser']); // Deletar um usuário

Route::get('posts', [PostController::class, 'getAllPosts']); // Listar postagens
Route::get('posts/{id}', [PostController::class, 'getPostById']); // Exibir uma postagem por id
Route::post('posts', [PostController::class, 'createPost']); // Criar uma nova postagem
Route::put('posts/{id}', [PostController::class, 'updatePost']); // Atualizar uma postagem
Route::delete('posts/{id}', [PostController::class, 'deletePost']); // Deletar uma postagem

Route::get('tags', [TagController::class, 'getAllTags']); // Listar tags
Route::get('tags/{id}', [TagController::class, 'getTagById']); // Exibir uma tag por id
Route::post('tags', [TagController::class, 'createTag']); // Criar uma nova tag
Route::put('tags/{id}', [TagController::class, 'updateTag']); // Atualizar uma tag
Route::delete('tags/{id}', [TagController::class, 'deleteTag']); // Deletar uma tag
Route::post('tags/{tag_id}/posts/{post_id}', [TagController::class, 'attachToPost']); // Associar uma tag a uma postagem

