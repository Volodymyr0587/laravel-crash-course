<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post ' . $i + 1,
                'description' => 'Description of Post ' . $i + 1,
                'body' => '<p>' . $i + 1 . ' Velit culpa occaecat esse dolore consequat qui labore nostrud sunt minim proident ex. Voluptate adipisicing aliquip nostrud duis quis dolor pariatur aliqua occaecat Lorem laborum ex eu. Cillum esse magna dolor sit sunt. Exercitation culpa Lorem occaecat dolore excepteur adipisicing quis consequat est laborum Lorem enim. Commodo enim nisi minim consectetur enim et minim nulla id mollit. Nulla adipisicing sit reprehenderit ullamco aute consectetur ad sit fugiat est ea.</p>',
                'slug' => 'post-' . $i + 1
            ]);
        }
    }
}
