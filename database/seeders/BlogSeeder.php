<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $blogs = [
            [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/1.jpg',
                'league_id'=>1,
            ],
            [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/2.jpg',
                'league_id'=>2,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/3.jpg',
                'league_id'=>3,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/4.jpg',
                'league_id'=>4,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/5.jpg',
                'league_id'=>5,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/6.jpg',
                'league_id'=>6,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/7.jpg',
                'league_id'=>7,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/8.jpg',
                'league_id'=>8,
            ],  [
                'title'=>"Fernando Santo's Portugal manifesto",
                'thumbnail'=>'/assets/images/blog/9.jpg',
                'league_id'=>9,
            ],


        ];
        $faker = FakerFactory::create();
        foreach ($blogs as $key => $blog) {


            $blog['description'] = 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. ';
            $blog['content'] ='
<div class="blog-single-content">
                                            <p>
                                                Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. <br><br>

Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. In ac dui quis
                                            </p>
                                            <h3>Game Highlights</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="blog-single-sub-item">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br>

Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                                        </p>
                                                        <i class="fa fa-quote-left" aria-hidden="true"></i>  <b>Donec mollis hendrerit risus hasellus nec sem in justo llentesque facilisis. Etiam imperdiet imperdiet orci. </b>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-single-sub-item">
                                                        <img src="/assets/images/blog/1.jpg" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <br>

Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                                            </p>

                                        </div>



         ';
            $blog['publish_date'] = Carbon::now()->subDay(count($blog) - $key)->subHour(rand(0, 23))->subMinute(rand(0, 59))->format('Y-m-d H:i:s');

            DB::table('blog')->insert($blog);

        }
        //
    }
}
