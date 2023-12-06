<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);
    
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        User::factory(5)->create();
        Post::factory(20)->create();
        
       
        //bikinnya dari factory pake faker


        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Charles',
        //     'email' => 'charles@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


    

// Post::create(
//     [
//         'title' => 'judul pertama',
//         'user_id' => 1,
//         'category_id' => 1,
//         'slug' => 'judulpertama',
//         'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore',
//         'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore magni dolores! Nisi, dolorem perferendis voluptas nobis quod suscipit sapiente iure cumque qui laboriosam dolores consequuntur aut magnam in, </p><p>unde adipisci et? Fugit suscipit reprehenderit recusandae, quae quisquam facilis? Non magni omnis repellat hic deserunt at quibusdam vitae. Qui minus neque illo, sapiente consequatur debitis fugit, doloribus omnis </p> <p>Linventore, deleniti eius totam pariatur labore hic vero odio nostrum excepturi blanditiis obcaecati magni at culpa delectus. Iste autem sit nam nisi, quos sed magnam recusandae rem, ducimus ullam minus, in tempore.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, sapiente? Unde, consectetur autem. Expedita enim eius cumque officia maiores corrupti numquam corporis rerum ut similique exercitationem asperiores veritatis quos, repellendus necessitatibus, magni a, quisquam nesciunt soluta hic accusantium temporibus dignissimos nisi. Facilis, consectetur repellendus. Esse minima deleniti voluptatem aperiam commodi.</p>'
//     ]
//     );

//     Post::create(
//     [
//         'title' => 'judul kedua',
//         'user_id' => 1,
//         'category_id' => 2,
//         'slug' => 'judulkedua',
//         'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore',
//         'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore magni dolores! Nisi, dolorem perferendis voluptas nobis quod suscipit sapiente iure cumque qui laboriosam dolores consequuntur aut magnam in, </p><p>unde adipisci et? Fugit suscipit reprehenderit recusandae, quae quisquam facilis? Non magni omnis repellat hic deserunt at quibusdam vitae. Qui minus neque illo, sapiente consequatur debitis fugit, doloribus omnis </p> <p>Linventore, deleniti eius totam pariatur labore hic vero odio nostrum excepturi blanditiis obcaecati magni at culpa delectus. Iste autem sit nam nisi, quos sed magnam recusandae rem, ducimus ullam minus, in tempore.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, sapiente? Unde, consectetur autem. Expedita enim eius cumque officia maiores corrupti numquam corporis rerum ut similique exercitationem asperiores veritatis quos, repellendus necessitatibus, magni a, quisquam nesciunt soluta hic accusantium temporibus dignissimos nisi. Facilis, consectetur repellendus. Esse minima deleniti voluptatem aperiam commodi.</p>'
//     ]
//     );

//     Post::create(
//     [
//         'title' => 'judul ketiga',
//         'user_id' => 2,
//         'category_id' => 2,
//         'slug' => 'judulketiga',
//         'excerpt' => 'orem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore',
//         'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta maxime, similique debitis ducimus quae sint quaerat minima corrupti, commodi dolore magni dolores! Nisi, dolorem perferendis voluptas nobis quod suscipit sapiente iure cumque qui laboriosam dolores consequuntur aut magnam in, </p><p>unde adipisci et? Fugit suscipit reprehenderit recusandae, quae quisquam facilis? Non magni omnis repellat hic deserunt at quibusdam vitae. Qui minus neque illo, sapiente consequatur debitis fugit, doloribus omnis </p> <p>Linventore, deleniti eius totam pariatur labore hic vero odio nostrum excepturi blanditiis obcaecati magni at culpa delectus. Iste autem sit nam nisi, quos sed magnam recusandae rem, ducimus ullam minus, in tempore.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, sapiente? Unde, consectetur autem. Expedita enim eius cumque officia maiores corrupti numquam corporis rerum ut similique exercitationem asperiores veritatis quos, repellendus necessitatibus, magni a, quisquam nesciunt soluta hic accusantium temporibus dignissimos nisi. Facilis, consectetur repellendus. Esse minima deleniti voluptatem aperiam commodi.</p>'
//     ]
//     );


//         // \App\Models\User::factory()->create([
//         //     'name' => 'Test User',
//         //     'email' => 'test@example.com',
//         // ]);
//     }

}
}