<?php

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\Post;
use Illuminate\Support\Facades\File;

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

Route::get('/', function () {
    $files = File::files(resource_path("posts"));

    $posts = Post::all();

    // $posts = array_map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);  
    //     return new Post(
    //         $document->title, 
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );

    // }, $files);

    // return view('posts', ['posts' => $post]);
    // AULA 15 - MINUTO 00:00
    // return view('posts', [
    //     'posts' => $posts
    // ]);

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function($slug){

    
    //FIND A POST BY ITS SLUG AND PASS IT TO A VIEW CALLED "post"
    $post = Post::findOrFail($slug);

    return view('post', [
        'post' => $post
    ]);

    // return view('post', [ 'post' => $post ]);
});