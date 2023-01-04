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
            'name' => 'Ardilla Risqiana',
            'email' => 'risqianaardilla@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Proramming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam hic nisi dicta blanditiis fugit incidunt velit? Ex, sunt minus dolorem aspernatur id doloremque odit illum sit provident.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, repellat quos aut accusantium cupiditate hic voluptatem perspiciatis minus neque fuga nihil, sequi a temporibus sit quisquam tenetur doloribus animi architecto? Odit vitae illum, magnam nulla provident ipsam quis reiciendis? Eum quis ipsa quo numquam laudantium nemo quibusdam iure esse fugit quisquam provident, quaerat architecto dicta dolores vero blanditiis, iusto sint cum minima eveniet ad, cumque voluptatibus. Mollitia harum consectetur quidem asperiores nesciunt. Sed ea amet blanditiis perspiciatis ab. Omnis, voluptatem. Sunt, mollitia. Non temporibus excepturi ducimus assumenda, deserunt sapiente magnam reiciendis modi. Dolor nostrum illo animi eligendi, eius ab sed?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        
        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam hic nisi dicta blanditiis fugit incidunt velit? Ex, sunt minus dolorem aspernatur id doloremque odit illum sit provident.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, repellat quos aut accusantium cupiditate hic voluptatem perspiciatis minus neque fuga nihil, sequi a temporibus sit quisquam tenetur doloribus animi architecto? Odit vitae illum, magnam nulla provident ipsam quis reiciendis? Eum quis ipsa quo numquam laudantium nemo quibusdam iure esse fugit quisquam provident, quaerat architecto dicta dolores vero blanditiis, iusto sint cum minima eveniet ad, cumque voluptatibus. Mollitia harum consectetur quidem asperiores nesciunt. Sed ea amet blanditiis perspiciatis ab. Omnis, voluptatem. Sunt, mollitia. Non temporibus excepturi ducimus assumenda, deserunt sapiente magnam reiciendis modi. Dolor nostrum illo animi eligendi, eius ab sed?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        
        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam hic nisi dicta blanditiis fugit incidunt velit? Ex, sunt minus dolorem aspernatur id doloremque odit illum sit provident.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, repellat quos aut accusantium cupiditate hic voluptatem perspiciatis minus neque fuga nihil, sequi a temporibus sit quisquam tenetur doloribus animi architecto? Odit vitae illum, magnam nulla provident ipsam quis reiciendis? Eum quis ipsa quo numquam laudantium nemo quibusdam iure esse fugit quisquam provident, quaerat architecto dicta dolores vero blanditiis, iusto sint cum minima eveniet ad, cumque voluptatibus. Mollitia harum consectetur quidem asperiores nesciunt. Sed ea amet blanditiis perspiciatis ab. Omnis, voluptatem. Sunt, mollitia. Non temporibus excepturi ducimus assumenda, deserunt sapiente magnam reiciendis modi. Dolor nostrum illo animi eligendi, eius ab sed?',
            'category_id' => 2,
            'user_id' => 1
        ]);



    }
}
