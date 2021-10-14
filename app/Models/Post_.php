<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora id doloremque repudiandae, illo distinctio assumenda exercitationem, iusto vel nisi beatae temporibus minima voluptatum nostrum dolore magni obcaecati culpa perspiciatis quod quam nihil eligendi saepe! Quidem, animi? Odio molestias vero architecto obcaecati quibusdam, impedit deserunt. Enim neque corrupti doloribus quaerat illo nobis at voluptas, qui quis esse eligendi quidem rerum quam consequuntur sint voluptatum in tenetur. Cum, culpa quae? Ipsam reiciendis perferendis culpa, laboriosam illum voluptas omnis asperiores dignissimos maxime consequuntur."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta est veritatis quisquam ab sed suscipit molestiae nam hic quasi nobis cupiditate quod omnis vitae animi, repellendus, nemo recusandae magnam, inventore aspernatur. Recusandae ex ipsa aperiam atque voluptatem, vero cumque rerum nihil nisi velit repudiandae maxime sapiente eveniet dolorum et eum totam dignissimos molestias minus doloribus ut cupiditate optio quo assumenda. In id explicabo sunt omnis doloremque cum repellendus voluptate eveniet error alias. Nostrum illo quisquam sunt vel provident, nihil dolorum optio, vitae voluptate porro, tempora sapiente. Quae, harum, reprehenderit enim sunt reiciendis magnam at repellendus nam debitis, iusto cumque veritatis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
