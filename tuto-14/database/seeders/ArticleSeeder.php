<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Test Article 1',
            'content' => 'This is the first test article.',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Article::create([
            'title' => 'Test Article 2',
            'content' => 'This is the second test article.',
            'user_id' => 2,
            'category_id' => 2,
        ]);
    }
}
