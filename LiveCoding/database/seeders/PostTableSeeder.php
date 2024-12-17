<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use League\Csv\Reader;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csv = Reader::createFromPath(database_path('seeders/posts.csv'));

        $csv->setHeaderOffset(0);

        $csv->each(function ($record) {
            Post::createOrFirst([
                'title' => $record['title'],
                'body' => '',
                'category_id' => 1,
            ]);
        });


        // Post::create([
        //     'title' => 'test',
        //     'body' => 'test',
        //     'category_id' => 3
        // ]);
    }
}