<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use    Illuminate\Database\QueryException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 3,
                'name' => 'DungTanpham',
                'email' => 'DungTan1@gmail.com',
                'password' => Hash::make('241403'),
                'avatar' => null,
                'level' => 2,
                'description' => null,
                'company_name' => 'FPt Aptech',
                'country' => 'Viet NAM',
                'street_address' => 'Dao Tan,Ba Đình, Ha Noi',
                'postcode_zip' => '1000000',
                "town_city" => "Ha NoI",
                'phone' => '0833691561',

            ],

        ]);

        DB::table('users')->insert([

            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => 'hello',
                'company_name' => 'FPT Aptev v  h',
                'country' => 'Viet Nam',
                'street_address' => 'Dung Tan, , Ha Noi',
                'postcode_zip' => '100000',
                "town_city" => "Ha Noi",
                'phone' => '0833691560',
            ]
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'Librore Brem',
                'subtitle'=> 'abc',
                'image' => 'blog-2.jpg',
                'category' => 'cây trong nhà',
                'content' => 'alan xi kame ahah ridu admaxam xam',
            ],
            [
                'user_id' => 2,
                'title' => 'This was one of our first days in Hawaii last week.',
                'subtitle'=> 'xyz',
                'image' => 'blog-2.jpg',
                'category' => 'CodeLeanON',
                'content' => 'ame ahah ridu',
            ]
        ]);
        DB::table('blog_comment')->insert([
            [
                'id' =>1,
                'user_id' => 1,
                'plant_id'=>1,
                'name' => 'Librore Brem',
                'email'=> 'abc',
                'messages' => 'Nice!',
            ],
            [
                'id' =>2,
                'user_id' => 2,
                'plant_id'=>2,
                'name' => 'Libroree Brem',
                'email'=> 'abc',
                'message' => 'Nice!',
            ]
        ]);
        
        // DB::table('brands')->insert([
        //     [
        //         'name' => 'Bảo Hiểm Bắt Buộc',
        //     ],
        //     [
        //         'name' => 'Bảo Hiểm Thân Vỏ',
        //     ],
        //     [
        //         'name' => 'Bảo Hiểm Hai Chiều',
        //     ],
        //     [
        //         'name' => 'Bảo Hiểm Vật Chất',
        //     ],
        // ]);
        DB::table('plants_category')->insert([
            [
                'plant_category_id' => 1,
                'name' =>'Flowering',
            ],
            [
                'plant_category_id' => 2,
                'name' =>'Non-Flowering',
            ],
            [
                'plant_category_id' =>3,
                'name' =>'Indoor',
            ],
            [
                'plant_category_id' => 4,
                'name' => 'Outdoor',
            ],
            [
                'plant_category_id' => 5,
                'name' =>'Succulents',
            ],
            [
                'plant_category_id' => 6,
                'name' =>'Medicinal',
            ],
            [
                'plant_category_id' => 7,
                'name' => 'Accessory',
            ],
            [
                'plant_category_id' => 8,
                'name' =>'Woodland',
            ],
        ]);
        DB::table('plants')->insert([
            [
                'id' => 1,
                // 'plants_details_id' => 1,
                'plant_id' => 1,
                'plant_category_id' => 1,
                'plant_images_id'=>1,
                'name' => 'Flowering',
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 29.99,
                'tag' => 'Flowering',
            ],
            [
                'id' => 2,
                // 'plants_details_id' => 2,
                'plant_id' => 2,
                'plant_category_id' => 2,
                'plant_images_id'=>2,
                'name' => 'Non-flowering',
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 35,
                'tag' => 'Non-flowering',
            ],
            [
                'id' => 3,
                // 'plants_details_id' => 3,
                'plant_id' => 3,
                'plant_category_id' => 3,
                'plant_images_id'=>3,
                'name' => 'Indoor',
                'description' => 'ABC',
                'content' =>'ABC',
                'price' => 35,
                'tag' => 'Indoor',
            ],
            [
                'id' => 4,
                // 'plants_details_id' => 4,
                'plant_id' => 4,
                'plant_category_id' => 4,
                'plant_images_id'=>4,
                'name' => 'Outdoor',
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 64,
                'tag' => 'Outdoor',
            ],
            [
                'id' => 5,
                // 'plants_details_id' => 5,
                'plant_id' => 5,
                'plant_category_id' => 5,
                'plant_images_id'=>5,
                'name' => "Succulents",
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 44,
                'tag' => 'Succulents',
            ],
            [
                'id' => 6,
                // 'plants_details_id' => 6,
                'plant_id' => 6,
                'plant_category_id' => 6,
                'plant_images_id'=>6,
                'name' => "Medicinal",
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 44,
                'tag' => 'Medicinal',
            ],
            [
                'id' => 7,
                // 'plants_details_id' => 7,
                'plant_id' => 7,
                'plant_category_id' => 7,
                'plant_images_id'=>7,
                'name' => "Accessory",
                'description' => 'ABC',
                'content' => 'ABC',
                'price' => 44,
                'tag' => 'Accessory',
            ],
            [
                'id' => 8,
                // 'plants_details_id' => 8,
                'plant_id' => 8,
                'plant_category_id' => 8,
                'plant_images_id'=>8,
                'name' => "Woodland",
                'description' =>'ABC',
                'content' => 'ABC',
                'price' => 44,
                'tag' => 'Woodland',
            ],


        ]);

        DB::table('plants_images')->insert([
            [
                'plant_images_id'=> 1,
                'path' => 'bh-batbuoc.jpg',
            ],
            [
                'plant_images_id'=> 2,
                'path' => 'bh-thanvo.jpg',
            ],
            [
                'plant_images_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'plant_images_id' => 4,
                'path' => 'bh-vat-chat.png',
            ],
            [
                'plant_images_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'plant_images_id' => 6,
                'path' => 'product-5.jpg',
            ],
            [
                'plant_images_id' => 7,
                'path' => 'product-5.jpg',
            ],
            [
                'plant_images_id' => 8,
                'path' => 'product-5.jpg',
            ],

        ]);
        DB::table('plants_details')->insert([
            [
                'plant_details_id' => 1,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 2,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 3,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 4,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 5,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 6,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 7,
                'qty' => 5,
            ],
            [
                'plant_details_id' => 8,
                'qty' => 5,
            ],
        ]);   
    }
}


