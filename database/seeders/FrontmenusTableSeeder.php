<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frontmenu;
use Illuminate\Support\Facades\DB;


class FrontmenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('frontmenus')->delete();
       
        Frontmenu::create(array('id' => '1','menu' => 'menuone','menunameenglish' => 'Camps','menunamearabic' => 'المعسكرات','menulevel' => '1','created_at' => '2024-09-13 12:50:47','updated_at' => '2024-10-13 09:11:25','deleted_at' => NULL,'parentmenu' => NULL));
     

        Frontmenu::create(array('id' => '2','menu' => 'menutwo','menunameenglish' => 'Experiences','menunamearabic' => 'الخبرات','menulevel' => '3','created_at' => '2024-09-13 12:51:24','updated_at' => '2024-09-17 11:11:01','deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '3','menu' => 'menuthree','menunameenglish' => 'Events','menunamearabic' => 'الأحداث','menulevel' => '2','created_at' => '2024-09-13 12:52:45','updated_at' => '2024-09-24 06:42:17','deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '4','menu' => 'menufour','menunameenglish' => 'About DRB Arabia','menunamearabic' => NULL,'menulevel' => NULL,'created_at' => NULL,'updated_at' => '2024-10-13 09:16:18','deleted_at' => NULL,'parentmenu' => NULL));
        
        Frontmenu::create(array('id' => '5','menu' => 'menufive','menunameenglish' => 'Gallery','menunamearabic' => NULL,'menulevel' => NULL,'created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '6','menu' => 'menusix','menunameenglish' => 'FAQ','menunamearabic' => NULL,'menulevel' => NULL,'created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '7','menu' => 'menuseven','menunameenglish' => 'Sustainability','menunamearabic' => 'Sustainability','menulevel' => '1','created_at' => '2024-09-16 23:06:13','updated_at' => '2024-09-16 23:06:13','deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '8','menu' => 'menueight','menunameenglish' => 'Special Offers','menunamearabic' => 'Special Offers','menulevel' => '1','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '9','menu' => 'menunine','menunameenglish' => 'The Leaf','menunamearabic' => 'الورقة','menulevel' => '2','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '10','menu' => 'menuten','menunameenglish' => 'The Leaf Accommodation','menunamearabic' => 'سكن أوراق الشجر','menulevel' => '2','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '11','menu' => 'menueleven','menunameenglish' => 'Events Private','menunamearabic' => 'Events Private','menulevel' => '2','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));
        Frontmenu::create(array('id' => '12','menu' => 'menutwelve','menunameenglish' => 'Events Corporate','menunamearabic' => 'Events Corporate','menulevel' => '2','created_at' => NULL,'updated_at' => NULL,'deleted_at' => NULL,'parentmenu' => NULL));

    }
}
