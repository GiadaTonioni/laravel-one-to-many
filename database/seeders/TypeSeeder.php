<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Frontend', 
            'Backend', 
            'Fullstack', 
            'Design', 
            'DevOps'
        ];

        foreach ($categories as $cat) {
            $category = new Type();

            $category->name = $cat;
            $category->slug = Str::slug($cat, '-');

            $category->save();

        }
    }
}
