<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

// PostSeeder von Luis erstellt.

class PostSeeder extends Seeder
{

    // Posts array 

    public $posts = [
        [
            'title' => 'Discover the Wonders of the Ocean 🌊',
            'content' => 'The ocean is a vast and mysterious place, filled with a diverse array of marine life...',
            'created_at' => '2021-03-15 08:30:00',
            'updated_at' => '2021-03-15 08:30:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 1,
        ],
        [
            'title' => 'Unveiling the Mysteries of Space 🚀',
            'content' => 'Space, the final frontier. It has captivated humanity for centuries, offering an endless...',
            'created_at' => '2022-08-24 14:45:00',
            'updated_at' => '2022-08-31 14:45:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 2,
        ],
        [
            'title' => 'The Magic of Autumn Leaves 🍁',
            'content' => 'Autumn brings a splash of color to our lives with its vibrant leaves...',
            'created_at' => '2020-10-15 07:00:00',
            'updated_at' => '2020-10-15 07:00:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 3,
        ],
        [
            'title' => 'Adventures in the Jungle 🌿',
            'content' => 'The jungle is a place of adventure, danger, and discovery...',
            'created_at' => '2022-05-12 12:30:00',
            'updated_at' => '2022-05-19 12:30:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 4,
        ],
        [
            'title' => 'A Symphony of Birds 🐦',
            'content' => 'The chirping of birds is like a symphony that heralds the arrival of a new day...',
            'created_at' => '2021-06-07 06:15:00',
            'updated_at' => '2021-06-14 06:15:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 5,
        ],
        [
            'title' => 'Exploring the Cityscape 🏙️',
            'content' => 'The city is a bustling hub of activity, every corner has its own story...',
            'created_at' => '2023-04-21 10:00:00',
            'updated_at' => '2023-04-21 10:00:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 6,
        ],
        [
            'title' => 'The Tranquility of Lakeside Mornings 🌅',
            'content' => 'The calm waters of the lake reflect the rising sun, creating a scene of tranquility...',
            'created_at' => '2022-03-30 05:45:00',
            'updated_at' => '2022-03-30 05:45:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 7,
        ],
        // Additional posts ensuring each user has authored at least one post
        [
            'title' => 'The Enchantment of Snowfall ❄️',
            'content' => 'The world transforms with a blanket of snow, creating a serene and peaceful scenery...',
            'created_at' => '2020-12-14 08:30:00',
            'updated_at' => '2020-12-21 08:30:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 1,
        ],
        [
            'title' => 'The Melody of Rain ☔',
            'content' => 'The rhythm of raindrops on the roof is like a melody that soothes the soul...',
            'created_at' => '2021-07-18 09:45:00',
            'updated_at' => '2021-07-18 09:45:00',
            'featured_img' => 'https://tinyurl.com/gluehbirne1231',
            'user_id' => 2,
        ],
        [
            'title' => 'The Radiance of Spring Flowers 🌸',
            'content' => 'Spring is a season of renewal, as flowers bloom and fill the world with color...',
            'created_at' => '2023-05-03 10:15:00',
            'updated_at' => '2023-05-10 10:15:00',
            'featured_img' => 'tphts://tinyurl.com/gluehbirne1231',
            'user_id' => 3,
        ],
    ];

    
    //Run the database seeds.
    
    public function run(): void
    {
        foreach($this->posts as $post){
            Post::create([
                "title" => $post['title'],
                "content" => $post['content'],
                "created_at" => $post['created_at'],
                "updated_at" => $post['updated_at'],
                'featured_img' => 'https://tinyurl.com/gluehbirne1231',
                'user_id' => $post['user_id'],
            ]);
        }
    }
}
