<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Clothing'],
            ['name' => 'Football'],
            ['name' => 'Poster']
        ];
        foreach ($categories as $key => $category) {
            $category['slug'] = Str::slug($category['name'].'-'.($key+1));
            $category['created_at'] = Carbon::now();
            DB::table('categories')->insert($category);
        }
    }
}
