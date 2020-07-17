<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email' => 'arca@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ];
        DB::table('vp_admin')->insert($data);

    }
}
