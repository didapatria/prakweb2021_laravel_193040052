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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adinda Fadhil Patria",
        "email" => "didapatria3@gmail.com",
        "image" => "dida.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adinda Fadhil Patria",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora id doloremque repudiandae, illo distinctio assumenda exercitationem, iusto vel nisi beatae temporibus minima voluptatum nostrum dolore magni obcaecati culpa perspiciatis quod quam nihil eligendi saepe! Quidem, animi? Odio molestias vero architecto obcaecati quibusdam, impedit deserunt. Enim neque corrupti doloribus quaerat illo nobis at voluptas, qui quis esse eligendi quidem rerum quam consequuntur sint voluptatum in tenetur. Cum, culpa quae? Ipsam reiciendis perferendis culpa, laboriosam illum voluptas omnis asperiores dignissimos maxime consequuntur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aldi Ageng Tri Seftian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta est veritatis quisquam ab sed suscipit molestiae nam hic quasi nobis cupiditate quod omnis vitae animi, repellendus, nemo recusandae magnam, inventore aspernatur. Recusandae ex ipsa aperiam atque voluptatem, vero cumque rerum nihil nisi velit repudiandae maxime sapiente eveniet dolorum et eum totam dignissimos molestias minus doloribus ut cupiditate optio quo assumenda. In id explicabo sunt omnis doloremque cum repellendus voluptate eveniet error alias. Nostrum illo quisquam sunt vel provident, nihil dolorum optio, vitae voluptate porro, tempora sapiente. Quae, harum, reprehenderit enim sunt reiciendis magnam at repellendus nam debitis, iusto cumque veritatis."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adinda Fadhil Patria",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora id doloremque repudiandae, illo distinctio assumenda exercitationem, iusto vel nisi beatae temporibus minima voluptatum nostrum dolore magni obcaecati culpa perspiciatis quod quam nihil eligendi saepe! Quidem, animi? Odio molestias vero architecto obcaecati quibusdam, impedit deserunt. Enim neque corrupti doloribus quaerat illo nobis at voluptas, qui quis esse eligendi quidem rerum quam consequuntur sint voluptatum in tenetur. Cum, culpa quae? Ipsam reiciendis perferendis culpa, laboriosam illum voluptas omnis asperiores dignissimos maxime consequuntur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aldi Ageng Tri Seftian",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta est veritatis quisquam ab sed suscipit molestiae nam hic quasi nobis cupiditate quod omnis vitae animi, repellendus, nemo recusandae magnam, inventore aspernatur. Recusandae ex ipsa aperiam atque voluptatem, vero cumque rerum nihil nisi velit repudiandae maxime sapiente eveniet dolorum et eum totam dignissimos molestias minus doloribus ut cupiditate optio quo assumenda. In id explicabo sunt omnis doloremque cum repellendus voluptate eveniet error alias. Nostrum illo quisquam sunt vel provident, nihil dolorum optio, vitae voluptate porro, tempora sapiente. Quae, harum, reprehenderit enim sunt reiciendis magnam at repellendus nam debitis, iusto cumque veritatis."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
