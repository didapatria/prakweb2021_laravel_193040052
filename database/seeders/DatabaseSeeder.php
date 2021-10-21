<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Adinda Fadhil Patria',
            'email' => '193040052@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Aldi Ageng Tri Seftian',
            'email' => '193040054@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error, voluptate dicta soluta fugiat nobis hic esse laudantium, illo voluptatibus nemo porro aspernatur quam. Molestias reiciendis recusandae, ipsum illo alias quidem excepturi inventore veniam ipsa laborum! Quos suscipit vero officia nulla impedit quas modi atque odio sapiente neque! Dignissimos, ipsa molestiae ex impedit iste laudantium. Reprehenderit ratione ipsum quae magnam repellendus debitis dolore. Deserunt asperiores ipsum quidem saepe quo earum, deleniti sint? Iusto, vitae obcaecati at porro suscipit id architecto veritatis ex aliquid sed consequuntur modi corporis dolores iure asperiores?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error, voluptate dicta soluta fugiat nobis hic esse laudantium, illo voluptatibus nemo porro aspernatur quam. Molestias reiciendis recusandae, ipsum illo alias quidem excepturi inventore veniam ipsa laborum! Quos suscipit vero officia nulla impedit quas modi atque odio sapiente neque! Dignissimos, ipsa molestiae ex impedit iste laudantium. Reprehenderit ratione ipsum quae magnam repellendus debitis dolore. Deserunt asperiores ipsum quidem saepe quo earum, deleniti sint? Iusto, vitae obcaecati at porro suscipit id architecto veritatis ex aliquid sed consequuntur modi corporis dolores iure asperiores?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error, voluptate dicta soluta fugiat nobis hic esse laudantium, illo voluptatibus nemo porro aspernatur quam. Molestias reiciendis recusandae, ipsum illo alias quidem excepturi inventore veniam ipsa laborum! Quos suscipit vero officia nulla impedit quas modi atque odio sapiente neque! Dignissimos, ipsa molestiae ex impedit iste laudantium. Reprehenderit ratione ipsum quae magnam repellendus debitis dolore. Deserunt asperiores ipsum quidem saepe quo earum, deleniti sint? Iusto, vitae obcaecati at porro suscipit id architecto veritatis ex aliquid sed consequuntur modi corporis dolores iure asperiores?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit odit impedit quas nisi iure dolorem ullam reiciendis ex error, voluptate dicta soluta fugiat nobis hic esse laudantium, illo voluptatibus nemo porro aspernatur quam. Molestias reiciendis recusandae, ipsum illo alias quidem excepturi inventore veniam ipsa laborum! Quos suscipit vero officia nulla impedit quas modi atque odio sapiente neque! Dignissimos, ipsa molestiae ex impedit iste laudantium. Reprehenderit ratione ipsum quae magnam repellendus debitis dolore. Deserunt asperiores ipsum quidem saepe quo earum, deleniti sint? Iusto, vitae obcaecati at porro suscipit id architecto veritatis ex aliquid sed consequuntur modi corporis dolores iure asperiores?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
