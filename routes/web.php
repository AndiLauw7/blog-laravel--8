<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',[
        "tittle" => "home"]);
});
Route::get('/about', function () {
    return view('about',[
        "tittle" => "about",
        "nama" => "Andi Safariansyah",
        "email" => "Andisafariansyah@gmail.com",
        "image" => "andi.jpeg"
    ]);
});


Route::get('/post', function () {
    $blog_posts = [
        [
    "tittle" => "post pertama",
    "slug"=> "postingan-ke-1",
    "author" => "Andi Safariansyah",
    "body" => "Lorem ipsum dolor, 
    sit amet consectetur adipisicing elit.
     Aspernatur officiis amet libero minima,
      dolorem quam nobis. Labore libero facere obcaecati fugit ipsam a modi eius reiciendis sint.
       Labore ut sapiente voluptatem fugit aliquam fuga, alias suscipit sequi tenetur veniam laudantium obcaecati impedit sunt illo minima nulla a voluptatum hic.
        Ducimus quod vel voluptatibus excepturi, nam nihil inventore laborum alias unde quidem accusantium dolor, possimus quos autem.
        Pariatur error officia consequatur, reprehenderit laudantium cumque commodi quae quaerat aliquid accusantium tenetur eius!",
    ],
    [
        "tittle" => "post kedua",
        "slug"=> "postingan-ke-2",
        "author" => "Andi Lauw",
        "body" => "Lorem ipsum dolor, 
        sit amet consectetur adipisicing elit.
         Aspernatur officiis amet libero minima,
          dolorem quam nobis. Labore libero facere obcaecati fugit ipsam a modi eius reiciendis sint.
           Labore ut sapiente voluptatem fugit aliquam fuga, alias suscipit sequi tenetur veniam laudantium obcaecati impedit sunt illo minima nulla a voluptatum hic.
            Ducimus quod vel voluptatibus excepturi, nam nihil inventore laborum alias unde quidem accusantium dolor, possimus quos autem.
            Pariatur error officia consequatur, reprehenderit laudantium cumque commodi quae quaerat aliquid accusantium tenetur eius!",
        ]
    ];
    return view('post',[
        "tittle" => "post",
        "posts" => $blog_posts
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $blog_posts = [
        [
    "tittle" => "post pertama",
    "slug"=> "postingan-ke-1",
    "author" => "Andi Safariansyah",
    "body" => "Lorem ipsum dolor, 
    sit amet consectetur adipisicing elit.
     Aspernatur officiis amet libero minima,
      dolorem quam nobis. Labore libero facere obcaecati fugit ipsam a modi eius reiciendis sint.
       Labore ut sapiente voluptatem fugit aliquam fuga, alias suscipit sequi tenetur veniam laudantium obcaecati impedit sunt illo minima nulla a voluptatum hic.
        Ducimus quod vel voluptatibus excepturi, nam nihil inventore laborum alias unde quidem accusantium dolor, possimus quos autem.
        Pariatur error officia consequatur, reprehenderit laudantium cumque commodi quae quaerat aliquid accusantium tenetur eius!",
    ],
    [
        "tittle" => "post kedua",
        "slug"=> "postingan-ke-2",
        "author" => "Andi Lauw",
        "body" => "Lorem ipsum dolor, 
        sit amet consectetur adipisicing elit.
         Aspernatur officiis amet libero minima,
          dolorem quam nobis. Labore libero facere obcaecati fugit ipsam a modi eius reiciendis sint.
           Labore ut sapiente voluptatem fugit aliquam fuga, alias suscipit sequi tenetur veniam laudantium obcaecati impedit sunt illo minima nulla a voluptatum hic.
            Ducimus quod vel voluptatibus excepturi, nam nihil inventore laborum alias unde quidem accusantium dolor, possimus quos autem.
            Pariatur error officia consequatur, reprehenderit laudantium cumque commodi quae quaerat aliquid accusantium tenetur eius!",
        ]
    ];
    $new_post=[];
    foreach($blog_posts as $post) {
        if($post["slug"]===$slug){
            $new_post =$post;
        }
    }
    return view('detailpost',[
        "tittle" => "halaman details",
        "post" => $new_post
    ]);
        
});