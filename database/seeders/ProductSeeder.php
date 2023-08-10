<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            //Clothing - category 1
            [
                'name' => 'Home Jersy',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588584/techwiz/shop-01-3_mmk6yb.png',
                'price' => 20,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Away Jersey',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588617/techwiz/shop-02-3_hvvkwo.png',
                'price' => 20,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Home Kit 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588643/techwiz/shop-03-3_xc7bgs.png',
                'price' => 50,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Away Kit 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588674/techwiz/shop-05-3_lvdf3n.png',
                'price' => 50,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Third Kit 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588692/techwiz/shop-06-3_mkfjyf.png',
                'price' => 50,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Home Collection 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588713/techwiz/shop-07-3_xfgcxb.png',
                'price' => 40,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Away Collection 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588735/techwiz/shop-08-3_furm3s.png',
                'price' => 40,
                'quantity' => 100,
                'category_id' => 1
            ],
            [
                'name' => 'Third Collection 22/23',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588759/techwiz/shop-09-3_x8s637.png',
                'price' => 40,
                'quantity' => 100,
                'category_id' => 1
            ],
            //Football - category 2
            [
                'name' => 'AC Milan Puma Ball',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588780/techwiz/4060981683490-1_hokcrbdvtpwjogn2_zo5pmv.jpg',
                'price' => 8,
                'quantity' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'UEFA Champions League Ball',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588803/techwiz/4065429307914-1_mttqxlrwigh9vlve_cd5oqz.jpg',
                'price' => 10,
                'quantity' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'Inter Milan Nike Ball',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588825/techwiz/193145982840-1_zgdr0duyrhy9mpzi_hvcfrx.jpg',
                'price' => 9,
                'quantity' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'Nike Ordem La Liga Ball',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588843/techwiz/w310233131-707-1_eiwb4j37norzdd9q_kwkzil.jpg',
                'price' => 20,
                'quantity' => 100,
                'category_id' => 2
            ],
            [
                'name' => 'Mitre Official FA Cup Ball',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588951/techwiz/5059527009787-1_e64xtd9coangw0wu_urh0qh.jpg',
                'price' => 25,
                'quantity' => 100,
                'category_id' => 2
            ],
            //Poster - category 3
            [
                'name' => 'Art Poster Messi x Neymar x Mbappe',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588976/techwiz/161549_xybjh8.jpg',
                'price' => 12.5,
                'quantity' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Art Poster Football Player',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691588999/techwiz/160249_gzidqq.jpg',
                'price' => 12.5,
                'quantity' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Art Poster Football Player',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691589024/techwiz/160250_rqkyv8.jpg',
                'price' => 12.5,
                'quantity' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Poster Maradona - The Hand Of God',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691589044/techwiz/101228_icpz2k.webp',
                'price' => 4,
                'quantity' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Art Poster Ronaldo PRTGL',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691589068/techwiz/159022_jf4a3i.jpg',
                'price' => 12.5,
                'quantity' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Art Poster Lionel Messi world cup ',
                'thumbnail' => 'https://res.cloudinary.com/dxcyeb8km/image/upload/v1691589089/techwiz/159319_m8szgl.jpg',
                'price' => 12.5,
                'quantity' => 100,
                'category_id' => 3
            ]
        ];
        $faker = FakerFactory::create();
        foreach ($products as $key => $product) {
            $product['slug'] = Str::slug($product['name'].'-'.($key+1));
            $product['short_desc'] = 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. ';
            $product['desc'] =
                '<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <ul>
                    <li>4.25" L × 5.5" W</li>
                    <li>Natural white cover paper</li>
                    <li>Printed in full color and foil stamped</li>
                    <li>Metallic gold envelope</li>
                    <li>Blank interior</li>
                    <li>Made in USA</li>
                </ul>';
            $product['created_at'] = Carbon::now()->subDay(count($products) - $key)->subHour(rand(0, 23))->subMinute(rand(0, 59))->format('Y-m-d H:i:s');
            DB::table('products')->insert($product);
        }
    }
}
