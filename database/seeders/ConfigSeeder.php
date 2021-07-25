<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = \DB::raw('CURRENT_TIMESTAMP');

        $users = [
            [
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'name' => 'Admin',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ]
        ];
        \DB::table('users')->insert($users);
    }
}
