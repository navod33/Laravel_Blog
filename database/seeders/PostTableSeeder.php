<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'post one',
                'excerpt' => 'summary of post one',
                'body' => 'body of post one',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2
            ],
            [
                'title' => 'post two',
                'excerpt' => 'summary of post two',
                'body' => 'body of post two',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 3
            ]
        ];

        foreach ($posts as $key => $value) {
            post::create($value);
        }
    }
}
