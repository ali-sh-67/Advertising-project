<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            [
                "id" => 1,
                "name" => 'املاک',
                "name_en" => 'states',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-home'
            ], [
                "id" => 2,
                "name" => 'وسایل نقلیه',
                "name_en" => 'cars',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-car'
            ], [
                "id" => 3,
                "name" => 'کالاهای دیجیتال',
                "name_en" => 'digital goods',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-mobile-alt'
            ], [
                "id" => 4,
                "name" => 'خانه و آشپزخانه',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-chair'
            ], [
                "id" => 5,
                "name" => 'خدمات',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-paint-roller'
            ], [
                "id" => 6,
                "name" => 'وسایل شخصی',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-air-freshener'
            ], [
                "id" => 7,
                "name" => 'سرگرمی و فراغت',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-chess-pawn'
            ], [
                "id" => 8,
                "name" => 'اجتماعی',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-user-friends'
            ], [
                "id" => 9,
                "name" => 'تجهیزات و صنعتی',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-tools'
            ], [
                "id" => 10,
                "name" => 'استخدام و کاریابی',
                "name_en" => '',
                "parent_id" => 0,
                "user_id" => 1,
                "icon" => 'fas fa-toolbox'
            ], [
                "id" => 11,
                "name" => 'فروش مسکونی',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 12,
                "name" => ' اجاره مسکونی',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 13,
                "name" => 'فروش اداری و تجاری',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 14,
                "name" => 'اجاره اداری و تجاری',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 15,
                "name" => 'اجاره کوتاه مدت',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 16,
                "name" => 'پروژه های ساخت و ساز',
                "name_en" => '',
                "parent_id" => 1,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 17,
                "name" => 'خودرو',
                "name_en" => '',
                "parent_id" => 2,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 18,
                "name" => 'قطعات یدکی و لوازم جانبی خودرو',
                "name_en" => '',
                "parent_id" => 2,
                "user_id" => 1,
                "icon" => ''
            ],[
                "id" => 19,
                "name" => 'موتور سیکلت و لوازم جانبی',
                "name_en" => '',
                "parent_id" => 2,
                "user_id" => 1,
                "icon" => ''
            ],[
                "id" => 20,
                "name" => 'قایق و لوازم جانبی',
                "name_en" => '',
                "parent_id" => 2,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 21,
                "name" => 'موبایل و تبلت',
                "name_en" => '',
                "parent_id" => 3,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 22,
                "name" => 'رایانه',
                "name_en" => '',
                "parent_id" => 3,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 23,
                "name" => 'کنسول،بازی ویدئویی و آنلاین',
                "name_en" => '',
                "parent_id" => 3,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 24,
                "name" => 'صوتی و تصویری',
                "name_en" => '',
                "parent_id" => 3,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 25,
                "name" => 'تلفن رومیزی',
                "name_en" => '',
                "parent_id" => 3,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 26,
                "name" => 'لوازم خانگی برقی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 27,
                "name" => 'ظروف و لوازم آشپزخانه',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 28,
                "name" => 'خوردنی و آشامیدنی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 29,
                "name" => 'خیاطی و بافتنی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 30,
                "name" => 'مبلمان و صنایع چوب',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 31,
                "name" => 'نور و روشنایی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 32,
                "name" => 'فرش، گلیم و موکت',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 33,
                "name" => 'تشک، روتختی و رختخواب',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 34,
                "name" => 'لوازم دکوری و تزئینی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 35,
                "name" => 'تهویه، سرمایش و گرمایش',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 36,
                "name" => 'شست‌وشو و نظافت',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 37,
                "name" => 'حمام و سرویس بهداشتی',
                "name_en" => '',
                "parent_id" => 4,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 38,
                "name" => 'موتور و ماشین',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 39,
                "name" => 'پذیرایی/مراسم',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 40,
                "name" => 'خدمات رایانه‌ای و موبایل',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 41,
                "name" => 'مالی/حسابداری/بیمه',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 42,
                "name" => 'حمل و نقل',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 43,
                "name" => 'پیشه و مهارت',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 44,
                "name" => 'آرایشگری و زیبایی',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 45,
                "name" => 'سرگرمی',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 46,
                "name" => 'نظافت',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 47,
                "name" => 'باغبانی و درختکاری',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 48,
                "name" => 'آموزشی',
                "name_en" => '',
                "parent_id" => 5,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 49,
                "name" => 'کیف، کفش و لباس',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 50,
                "name" => 'زیورآلات و اکسسوری',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 51,
                "name" => 'آرایشی، بهداشتی و درمانی',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 52,
                "name" => 'کفش و لباس بچه',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 53,
                "name" => 'وسایل بچه و اسباب بازی',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 54,
                "name" => 'لوازم التحریر',
                "name_en" => '',
                "parent_id" => 6,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 55,
                "name" => 'بلیط',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 56,
                "name" => 'تور و چارتر',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 57,
                "name" => 'کتاب و مجله',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 58,
                "name" => 'دوچرخه/اسکیت/اسکوتر',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 59,
                "name" => 'حیوانات',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 60,
                "name" => 'کلکسیون و سرگرمی',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 61,
                "name" => 'آلات موسیقی',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 62,
                "name" => 'ورزش و تناسب اندام',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 63,
                "name" => 'اسباب‌ بازی',
                "name_en" => '',
                "parent_id" => 7,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 64,
                "name" => 'رویداد',
                "name_en" => '',
                "parent_id" => 8,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 65,
                "name" => 'داوطلبانه',
                "name_en" => '',
                "parent_id" => 8,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 66,
                "name" => 'گم‌شده‌ها',
                "name_en" => '',
                "parent_id" => 8,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 67,
                "name" => 'مصالح و تجهیزات ساختمان',
                "name_en" => '',
                "parent_id" => 9,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 68,
                "name" => 'ابزارآلات',
                "name_en" => '',
                "parent_id" => 9,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 69,
                "name" => 'ماشین‌آلات صنعتی',
                "name_en" => '',
                "parent_id" => 9,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 70,
                "name" => 'تجهیزات کسب‌وکار',
                "name_en" => '',
                "parent_id" => 9,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 71,
                "name" => 'عمده فروشی',
                "name_en" => '',
                "parent_id" => 9,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 72,
                "name" => 'اداری و مدیریت',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 73,
                "name" => 'سرایداری و نظافت',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 74,
                "name" => 'معماری ،عمران و ساختمانی',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 75,
                "name" => 'خدمات فروشگاه و رستوران',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 76,
                "name" => 'رایانه و فناوری اطلاعات',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 77,
                "name" => 'مالی و حسابداری و حقوقی',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 78,
                "name" => 'بازاریابی و فروش',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 79,
                "name" => 'صنعتی و فنی و مهندسی',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 80,
                "name" => 'آموزشی',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 81,
                "name" => 'حمل و نقل',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 82,
                "name" => 'درمانی و زیبایی و بهداشتی',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ], [
                "id" => 83,
                "name" => 'هنری و رسانه',
                "name_en" => '',
                "parent_id" => 10,
                "user_id" => 1,
                "icon" => ''
            ]
        ]);
    }
}
