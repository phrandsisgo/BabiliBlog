<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment;

// CommentSeeder von Luis erstellt.

class CommentSeeder extends Seeder
{
    // Comments array
    
   public $comments = [
        [
            'content' => 'This is an interesting comment about the post by Baris.',
            'created_at' => '2021-03-15 08:30:00',
            'updated_at' => '2021-03-15 08:30:00',
            'user_id' => 1, // Baris
            'post_id' => 1,
        ],
        [
            'content' => 'Another insightful comment on this topic by Francisco.',
            'created_at' => '2022-08-24 14:45:00',
            'updated_at' => '2022-08-31 14:45:00',
            'user_id' => 2, // Francisco
            'post_id' => 4,
        ],
        [
            'content' => 'I totally agree with the author! Great post by Luis.',
            'created_at' => '2020-10-15 07:00:00',
            'updated_at' => '2020-10-15 07:00:00',
            'user_id' => 3, // Luis
            'post_id' => 5,
        ],
        [
            'content' => 'Nice insights. I learned a lot from this post by Cyrill.',
            'created_at' => '2022-05-12 12:30:00',
            'updated_at' => '2022-05-19 12:30:00',
            'user_id' => 4, // Cyrill
            'post_id' => 3,
        ],
        [
            'content' => 'This post is thought-provoking and well-written by Binyam.',
            'created_at' => '2021-06-07 06:15:00',
            'updated_at' => '2021-06-14 06:15:00',
            'user_id' => 5, // Binyam
            'post_id' => 4,
        ],
        [
            'content' => 'I had a different perspective, but this post changed my mind by Alex-G.',
            'created_at' => '2023-04-21 10:00:00',
            'updated_at' => '2023-04-21 10:00:00',
            'user_id' => 6, // Alex-G
            'post_id' => 7,
        ],
        [
            'content' => 'I found this post very informative. Thanks for sharing by Alex-I.',
            'created_at' => '2022-03-30 05:45:00',
            'updated_at' => '2022-03-30 05:45:00',
            'user_id' => 7, // Alex-I
            'post_id' => 6,
        ],
    ];
    

    public function run(): void
    {
        foreach($this->comments as $comment){
            Comment::create([
                "content" => $comment['content'],
                "created_at" => $comment['created_at'],
                'user_id' => $comment['user_id'],
                'post_id' => $comment['post_id']
            ]);
        }
    }
}
