<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'PhamTanDung',
                'email' => 'PhamTanDung@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' => null,
                'company_name' =>'fivestars',
                'country' => 'Viet Nam',
                'street_address' => 'Me Tri, Nam Tu Liem',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '0339068123',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 2,
                'name' => 'NguyenHoangHa',
                'email' => 'NguyenHoangHa@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' => null,
                'company_name' =>'Admin',
                'country' => 'Viet Nam',
                'street_address' => 'Phu My, My Dinh 2, Nam Tu Liem',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '0339068918',
            ],
            [
                'id' => 3,
                'name' => 'Truong Cong Viet',
                'email' => 'TruongCongViet@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => null,
                'company_name' =>'FiveStars',
                'country' => 'VietNam',
                'street_address' => 'DinhThon, My Dinh',
                'postcode_zip' => '10000',
                'town_city' => 'HaCity',
                'phone' => '0339068917',
            ],
            [
                'id' => 4,
                'name' => 'NguyenNgocQuy',
                'email' => 'NguyenNgocQuy@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
                'company_name' =>'FiveStars',
                'country' => 'VietNam',
                'street_address' => 'CoNhue,Bac Tu Liem',
                'postcode_zip' => '42000',
                'town_city' => 'Bac Tu Liem',
                'phone' => '0339068916',
            ],
            [
                'id' => 5,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
                'company_name' =>'Admin',
                'country' => 'Viet Nam',
                'street_address' => 'Phu My, My Dinh 2, Nam Tu Liem',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '0339068918',
            ],
            
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'Air Plant 101: Plant Care Online Workshop',
                'image' => 'Blog1.jpg',
                'category' => 'Workshop',
                'content' => 'Join us for a free Air Plant Online Workshop! Learn all about these soilless epiphytes and best care practices to keep them healthy at home.',
            ],
            [
                'user_id' => 2,
                'title' => 'Happy Hour Plannest Shop: Cobble Hill',
                'image' => 'blog2.jpg',
                'category' => 'Workshop',
                'content' => 'Join us at our Cobble Hill, BK location for a Happy Hour Plannest & Shop! Enjoy complimentary drinks and 10% off The Plannest plants and products..',
            ],
            [
                'user_id' => 3,
                'title' => 'Happy Hour Plannest Shop: Park Slope',
                'image' => 'blog3.jpg',
                'category' => 'Workshop',
                'content' => 'Join us at our Park Slope, BK location for a Happy Hour Plannest & Shop! Enjoy complimentary drinks and 10% off The Plannest plants and products.',
            ],
            [
                'user_id' => 4,
                'title' => 'Happy Hour Plannest Shop: UWS',
                'image' => 'blog4.jpg',
                'category' => 'Workshop',
                'content' => 'Join us at our UWS, NYC location for a Happy Hour Plannest & Shop! Enjoy complimentary drinks and 10% off The Plannest plants and products.',
            ],
            [
                'user_id' => 5,
                'title' => 'Happy Hour Plannest Shop: Williamsburg',
                'image' => 'blog5.jpg',
                'category' => 'Workshop',
                'content' => 'Join us at our Williamsburg, BK location for a Happy Hour Plannest & Shop! Enjoy complimentary drinks and 10% off The Plannest plants and products.',
            ],
            [
                'user_id' => 6,
                'title' => 'Happy Hour Sip n Shop: Chicago',
                'image' => 'blog6.jpg',
                'category' => 'Workshop',
                'content' => 'Join us at our Chicago, IL location for a Happy Hour Plannest & Shop! Enjoy complimentary drinks and 10% off The Plannest plants and products.',
            ],
        ]);
        DB::table('product_categories')->insert([
            [
                'name' => 'Flowering',
            ],
            [
                'name' => 'Non-flowering',
            ],
            [
                'name' => 'Indoor',
            ],
            [
                'name' => 'Outdoor',
            ],
            [
                'name' => 'Succulents',
            ],
            [
                'name' => 'Medicinal',
            ],
            [
                'name' => 'Planting tools',
            ],
            [
                'name' => 'Plant soil',
            ],
        ]);

        DB::table('products')->insert([
            [
                //Flowering,Non-flowering,Indoor,Outdoor,Succulents,Medicinal,Planting tools,Plant soil
                'id' => 1,
                'product_category_id' => 1,
                'name' => 'White Orchid',
                'description' => 'With its elegant stems and vibrant white flowers, this Phalaenopsis orchid makes any space feel chicer. You may notice a small number of blooms on your orchid upon delivery. These blooms will open quicker in a warm indoor setting. The Phalaenopsis will typically bloom about once a year for up to three months. After a blooming cycle, the flowers will wilt and fall off. This is the orchid’s way to store up energy to re-bloom again next season.',
                'content' => 'White Orchid',
                'price' => 88,
                'qty' => 5,
                'discount' => 495,
                'weight' => 1.3,
                'sku' => '12',
                'featured' =>true,
                'tag' => 'Flowering',
            ],
            [
                'id' => 2,
                'product_category_id' => 2,
                'name' => 'Moonshine Snake Plant',
                'description' => 'The Moonshine Snake Plant (Dracaena trifasciata Moonshine), is adored its upright, broad leaves that boast a silvery overtone and dark green edges. Snake plants are known for being drought-tolerant, and for their superior air-purifying capabilities. But please note: unlike other Snake plants, the Moonshine needs brighter light to retain its silvery pigmentation.',
                'content' => 'Moonshine Snake Plant',
                'price' => 78,
                'qty' => 25,
                'discount' => 13,
                'weight' => null,
                'sku' => null,
                'featured' =>true,
                'tag' => 'Non-flowering',
            ],
            [
                'id' => 3,
                'product_category_id' => 3,
                'name' => 'Money Tree Plant',
                'description' => 'Said to bring good luck and fortune, the Money Tree is the perfect plant to add to any room of your home to create good Feng Shui. It is known for its resilience, ease of growth, and fun braided trunk.',
                'content' => 'Money Tree Plant',
                'price' => 68,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Indoor',
            ],
            [
                'id' => 4,
                'product_category_id' => 4,
                'name' => 'Large Fiddle Leaf Fig Tree',
                'description' =>  'The Fiddle Leaf Fig, or Ficus lyrata, is famous for its broad green leaves with prominent veining. It is sometimes described as “fickle” but will thrive in an environment with stable temps and bright light. Sized to ship best, our large Fiddle Leaf Fig arrives with room to grow as it adapts to your homes conditions.',
                'content' => 'Large Fiddle Leaf Fig Tree',
                'price' => 98,
                'qty' => 30,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'outdoor',
            ],
            // [
            //     'id' => 5,
            //     'product_category_id' => 5,
            //     'name' => "Men's Painted Hat",
            //     'description' => null,
            //     'content' => null,
            //     'price' => 29.99,
            //     'qty' => 35,
            //     'discount' => 35,
            //     'weight' => null,
            //     'sku' => null,
            //     'featured' =>true,
            //     'tag' => 'Accessories',
            // ],
            // [
            //     'id' => 6,
            //     'product_category_id' => 7,
            //     'name' => 'Converse Shoes',
            //     'description' => null,
            //     'content' => null,
            //     'price' => 19.99,
            //     'qty' => 20,
            //     'discount' => 34,
            //     'weight' => null,
            //     'sku' => null,
            //     'featured' => true,
            //     'tag' => ' Medicinal',
            // ],
            // [
            //     'id' => 7,
            //     'product_category_id' => 6,
            //     'name' => 'Pure Pineapple',
            //     'description' => null,
            //     'content' => null,
            //     'price' => 29.99,
            //     'qty' => 20,
            //     'discount' => 35,
            //     'weight' => null,
            //     'sku' => null,
            //     'featured' =>true,
            //     'tag' => 'Planting tools',
            // ],
            // [
            //     'id' => 8,
            //     'product_category_id' => 8,
            //     'name' => '2 Layer Windbreaker',
            //     'description' => null,
            //     'content' => null,
            //     'price' => 29.99,
            //     'qty' => 30,
            //     'discount' => 35,
            //     'weight' => null,
            //     'sku' => null,
            //     'featured' => true,
            //     'tag' => 'Plant soil',
            // ],
        ]);
        DB::table('product_images')->insert([
             //Flowering,Non-flowering,Indoor,Outdoor,Succulents,Medicinal,Planting tools,Plant soil
             //Cây có hoa,không ra hoa,Cây xương rồng,Ngoài trời,Trong nhà,Thuốc và vân vân,
             //Flowering
            [
                'product_id' => 1,
                'path' => 'sucA-3.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'sucA-2.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'sucA-1.webp',
            ],
            
            [
                'product_id' => 2,
                'path' => 'sucB-1.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'sucB-2.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'sucB-3.webp',
            ],
            
            [
                'product_id' => 3,
                'path' => 'sucC.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'sucC1.webp',
            ],
            
            //Non-flowering
            [
                'product_id' => 4,
                'path' => 'plantA-0.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'plantA-1.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'plantA-2.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'plantA-3.jpg',
            ],

            [
                'product_id' => 5,
                'path' => 'plantB-0.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'plantB-1.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'plantB-2.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'plantB-3.webp',
            ],
            //Indoor
            [
                'product_id' => 6,
                'path' => 'inA-1.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'inA-2.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'inA-3.webp',
            ],
            
            [
                'product_id' => 7,
                'path' => 'inB-1.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'inB-2.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'inB-3.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'inB-4.webp',
            ],

            [
                'product_id' => 8,
                'path' => 'inC-1.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'inC-2.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'inD-1.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'inD-2.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'inD-3.webp',
            ],

            //Outdoor
            [
                'product_id' => 10,
                'path' => 'nonA-1.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'nonA-2.webp',
            ],

            [
                'product_id' => 11,
                'path' => 'nonB-1.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'nonB-2.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'nonC-1.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'nonC-2.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'nonD-1.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'nonD-2.webp',
            ],
            //Succulents,Medicinal
            [
                'product_id' => 14,
                'path' => 'outA-1.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'outA-2.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'outA-3.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'outB-1.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'outB-2.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'outB-3.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'outC1.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'outC2.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'outC3.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'outD1.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'outD1.webp',
            ],
           //Medicinal
           [
            'product_id' => 18,
            'path' => 'outD1.webp',
        ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'qty' => 2,
            ],
            [
                'product_id' => 1,
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'qty' => 4,
            ],
            [
                'product_id' => 1,
                'qty' => 2,
            ],
            [
                'product_id' => 1,
                'qty' => 1,
            ],
            [
                'product_id' => 2,
                'qty' => 6,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 5,
            ],
            [
                'product_id' => 2,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'It.s Beautiful ##',
                'rating' =>54,
            ],
        ]);
    }
}

