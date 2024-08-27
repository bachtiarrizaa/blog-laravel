<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Bachtiar Riza',
        //     'email' => 'bachtiar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Riza',
        //     'email' => 'riza@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-propgramming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita dolores nisi minima amet cum omnis, culpa consequuntur vitae est nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia nulla repudiandae explicabo dolore expedita laudantium illum perferendis, quia fugiat id nesciunt tenetur ipsa enim harum ea quis iste ipsum aspernatur? Aliquid ipsam, sunt voluptatibus consectetur officia mollitia atque exercitationem, aperiam, cumque iure beatae autem eligendi! Cumque doloremque fugit voluptates voluptatibus ipsam, ad est molestias cupiditate quia itaque modi hic sit, ratione id, pariatur similique asperiores natus dolorem quibusdam iure? Dicta dolores eos reiciendis cumque illo voluptatem necessitatibus ipsum quos impedit autem, rem rerum, hic sapiente. Ad iusto non ea minus nulla itaque? Fugiat eum nobis iure, natus accusamus sequi ipsam commodi tempore voluptate vero tenetur non sapiente illum officiis eligendi, dignissimos facere autem, molestiae magni! Consequuntur iste rerum explicabo corporis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita dolores nisi minima amet cum omnis, culpa consequuntur vitae est nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia nulla repudiandae explicabo dolore expedita laudantium illum perferendis, quia fugiat id nesciunt tenetur ipsa enim harum ea quis iste ipsum aspernatur? Aliquid ipsam, sunt voluptatibus consectetur officia mollitia atque exercitationem, aperiam, cumque iure beatae autem eligendi! Cumque doloremque fugit voluptates voluptatibus ipsam, ad est molestias cupiditate quia itaque modi hic sit, ratione id, pariatur similique asperiores natus dolorem quibusdam iure? Dicta dolores eos reiciendis cumque illo voluptatem necessitatibus ipsum quos impedit autem, rem rerum, hic sapiente. Ad iusto non ea minus nulla itaque? Fugiat eum nobis iure, natus accusamus sequi ipsam commodi tempore voluptate vero tenetur non sapiente illum officiis eligendi, dignissimos facere autem, molestiae magni! Consequuntur iste rerum explicabo corporis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita dolores nisi minima amet cum omnis, culpa consequuntur vitae est nulla.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia nulla repudiandae explicabo dolore expedita laudantium illum perferendis, quia fugiat id nesciunt tenetur ipsa enim harum ea quis iste ipsum aspernatur? Aliquid ipsam, sunt voluptatibus consectetur officia mollitia atque exercitationem, aperiam, cumque iure beatae autem eligendi! Cumque doloremque fugit voluptates voluptatibus ipsam, ad est molestias cupiditate quia itaque modi hic sit, ratione id, pariatur similique asperiores natus dolorem quibusdam iure? Dicta dolores eos reiciendis cumque illo voluptatem necessitatibus ipsum quos impedit autem, rem rerum, hic sapiente. Ad iusto non ea minus nulla itaque? Fugiat eum nobis iure, natus accusamus sequi ipsam commodi tempore voluptate vero tenetur non sapiente illum officiis eligendi, dignissimos facere autem, molestiae magni! Consequuntur iste rerum explicabo corporis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}