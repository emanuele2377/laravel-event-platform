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
                'name' => 'sala macchine',
            ],
            [
                'name' => 'museo',
            ],
            [
                'name' => 'rock',
            ],
            [
                'name' => 'classico',
            ],
            [
                'name' => 'juve-Real madrid',
            ],
            [
                'name' => 'barcellona-real madrid',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
