<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]); 

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'

        ]); 

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'

        ]); 

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, provident inventore quis eligendi quisquam consequatur velit magni dolore voluptas laudantium.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus sunt architecto voluptatem eius vitae deserunt a omnis! Sint iusto et architecto ducimus ratione perspiciatis facere! Quisquam ducimus tempora doloremque perspiciatis, adipisci quibusdam ratione, reiciendis, error voluptatum distinctio reprehenderit officia explicabo rerum consequuntur eaque! Perferendis placeat dicta saepe nam? Sunt, veniam mollitia commodi eligendi sit incidunt deserunt consectetur nisi. Dolore esse maiores ut laboriosam quae exercitationem odit, nostrum culpa corporis aliquid unde officia laborum quam at vel nemo repellat quod sint quia excepturi eius temporibus soluta. Ducimus tempore error totam eos ex laboriosam dicta alias quas, facilis aliquam, repudiandae minima doloremque.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, provident inventore quis eligendi quisquam consequatur velit magni dolore voluptas laudantium.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus sunt architecto voluptatem eius vitae deserunt a omnis! Sint iusto et architecto ducimus ratione perspiciatis facere! Quisquam ducimus tempora doloremque perspiciatis, adipisci quibusdam ratione, reiciendis, error voluptatum distinctio reprehenderit officia explicabo rerum consequuntur eaque! Perferendis placeat dicta saepe nam? Sunt, veniam mollitia commodi eligendi sit incidunt deserunt consectetur nisi. Dolore esse maiores ut laboriosam quae exercitationem odit, nostrum culpa corporis aliquid unde officia laborum quam at vel nemo repellat quod sint quia excepturi eius temporibus soluta. Ducimus tempore error totam eos ex laboriosam dicta alias quas, facilis aliquam, repudiandae minima doloremque.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, provident inventore quis eligendi quisquam consequatur velit magni dolore voluptas laudantium.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus sunt architecto voluptatem eius vitae deserunt a omnis! Sint iusto et architecto ducimus ratione perspiciatis facere! Quisquam ducimus tempora doloremque perspiciatis, adipisci quibusdam ratione, reiciendis, error voluptatum distinctio reprehenderit officia explicabo rerum consequuntur eaque! Perferendis placeat dicta saepe nam? Sunt, veniam mollitia commodi eligendi sit incidunt deserunt consectetur nisi. Dolore esse maiores ut laboriosam quae exercitationem odit, nostrum culpa corporis aliquid unde officia laborum quam at vel nemo repellat quod sint quia excepturi eius temporibus soluta. Ducimus tempore error totam eos ex laboriosam dicta alias quas, facilis aliquam, repudiandae minima doloremque.'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
