<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    $posts = App\Models\Post::all();
    return view('home', compact('posts'));
});

$router->get('/post/{slug}', ['as'=>'post', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->first();
    if (!$post) {
      return redirect('/');
    }
    return view('post', compact('post'));
}]);

$router->get('/user/list', ['as'=>'userList', function () {
    $users = App\Models\User::all();
    return view('users', compact('users'));
}]);

$router->get('/comment/guests', ['as'=>'commentGuests', function () {
    $comments = App\Models\Comment::doesntHave('commentGuests')->get();
    return view('comments', compact('comments'));
}]);
