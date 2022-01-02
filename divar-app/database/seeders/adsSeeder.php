<?php
//
//namespace Database\Seeders;
//
//use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//
//class AdsSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        DB::table('ads')->insert([
//            [
//                "id" => 1,
//                "user_id" => 1,
//                "category_id" => 11,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 2,
//                "user_id" => 2,
//                "category_id" => 12,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 3,
//                "user_id" => 3,
//                "category_id" => 13,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 4,
//                "user_id" => 4,
//                "category_id" => 14,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 5,
//                "user_id" => 5,
//                "category_id" => 15,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 6,
//                "user_id" => 6,
//                "category_id" => 16,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 7,
//                "user_id" => 7,
//                "category_id" => 17,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 8,
//                "user_id" => 8,
//                "category_id" => 18,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 9,
//                "user_id" => 9,
//                "category_id" => 19,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 10,
//                "user_id" => 10,
//                "category_id" => 20,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 11,
//                "user_id" => 1,
//                "category_id" => 21,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 12,
//                "user_id" => 2,
//                "category_id" => 22,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 13,
//                "user_id" => 3,
//                "category_id" => 23,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 14,
//                "user_id" => 4,
//                "category_id" => 24,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 15,
//                "user_id" => 5,
//                "category_id" => 25,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 16,
//                "user_id" => 6,
//                "category_id" => 26,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ],[
//                "id" => 17,
//                "user_id" => 7,
//                "category_id" => 27,
//                "title" => 'پراید',
//                "description" => 'این برای تست است',
//                "image_url" => '1640980676-.png',
//                "price" => '125658900',
//                "address" => 'مشهد،میدان شهدا،خیابان هاشمی نژاد',
//                "phone_number_ads" => '664425689',
//            ]
//        ]);
//
//            //
//
//    }
//}
