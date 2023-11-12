<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'edit_blogs',
            'description' => 'Blog yazılarını düzenleme',
        ]);

        DB::table('permissions')->insert([
            'name' => 'add_blogs',
            'description' => 'Blog yazıları ekleme',
        ]);

        DB::table('permissions')->insert([
            'name' => 'delete_blogs',
            'description' => 'Blog yazılarını silme',
        ]);

        DB::table('permissions')->insert([
            'name' => 'accept_blogs',
            'description' => 'Blog yazılarının yayınlanmasına izin verme',
        ]);
    }
}
