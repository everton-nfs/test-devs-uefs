# Instalação

Nescessário instalar 

- `composer` gestor de pacotes do php 
- `php 8.2.9`
- Mysql

Instalar as dependências do php

`composer install`

Para rodar a aplicação só precisa do comando

`php artisan serve`


Crie um banco de dados e configure no .env para rodar as migrations da aplicação

`php artisan migrate`


## MiniBlog API Laravel

Este é um exemplo de API Laravel para um miniblog. Ele fornece endpoints para gerenciar usuários, postagens e tags.


## Rotas

A API fornece as seguintes rotas:

#### Users
 - `GET /users`: Listar usuários.
 - `GET /users/posts`: Listar usuários com suas postagens.
 - `GET /users/posts`: Listar usuários com postagens e tags.
 - `GET /users/{id}`: Exibir um usuário por id.
 - `GET /users/{id}/posts-tags`: Pegar usuário por ID com postagens e tags.
 - `POST /users`: Criar um novo usuário.
 - `POST /users`: Atualizar um usuário.
 - `DELETE /users/{id}`: Deletar um usuário.

#### Posts
 - `GET /posts`: Listar postagens.
 - `GET /posts/{id}`: Exibir uma postagem por id.
 - `POST /posts`: Criar uma nova postagem.
 - `PUT /posts/{id}`: Atualizar uma postagem.
 - `DELETE /posts/{id}`: Deletar uma postagem.

#### Tags
 - `GET /tags`: Listar tags.
 - `GET /tags/{id}`: Exibir uma tag por id.
 - `POST /tags`: Criar uma nova tag.
 - `PUT /tags/{id}`: Atualizar uma tag.
 - `DELETE /tags/{id}`: Deletar uma tag.
 - `POST /tags/{tag_id}/posts/{post_id}`: Associar uma tag a uma postagem.

