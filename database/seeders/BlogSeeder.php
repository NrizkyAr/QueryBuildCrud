<?php

namespace Database\Seeders;


use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->truncate();

        Blog::factory()
        ->count(10)
        ->create();
        //  DB::table('blogs')->insert([
        //     'title' => 'ini adalah blog kegelapan',
        //     'description' => 'lorem ispsun gari freaf grubing maninf koloded kiraigau vuote  opoeng koariin',
        //     'created_at'  => '2025-05-31 10:43:06',
        //     'updated_at' => date_create('now'),
        //  ]);
        //  DB::table('blogs')->insert([
        //     'title' => 'ini adalah blog cahaya',
        //     'description' => 'lorem ispsun gari frost hutrin bugari manti kolom baoal maninf koloded kiraigau vuote  opoeng koariin',
        //     'created_at'  => '2025-06-21 13:23:06',
        //     'updated_at' => date_create('now'),
        //  ]);
    }
}
