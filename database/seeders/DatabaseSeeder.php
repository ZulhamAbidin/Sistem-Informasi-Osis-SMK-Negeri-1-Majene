<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'Admin',
            'username' => 'zlhm.a',
            'email' => 'zlhm378@gmail.com',
            'password' => bcrypt('123809Zulham'),
            'is_admin' => '1'
        ]);

         User::create([
            'name' => 'astriayuningsih',
            'username' => 'astriayuningsih',
            'email' => 'astriayuningsih@gmail.com',
            'password' => bcrypt('astriayuningsih'),
            'is_admin' => '0'
        ]);

    }
}
