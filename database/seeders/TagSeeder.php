<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'blues',
            ],
            [
                'name' => 'rock',
            ],
            [
                'name' => 'pop',
            ],
            [
                'name' => 'rap',
            ],
            [
                'name' => 'lirica',
            ],
            [
                'name' => 'classica',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
