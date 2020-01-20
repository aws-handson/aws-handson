<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guns')->insert([
            [
                'name' => 'blue hand gun',
                'img' => 'blue+hand+gun.png',
            ],
            [
                'name' => 'blue shotgun',
                'img' => 'blue+shotgun.png',
            ],
            [
                'name' => 'gray hand gun',
                'img' => 'gray+hand+gun.png',
            ],
            [
                'name' => 'gray auto gun',
                'img' => 'gray+auto+gun.png',
            ],
            [
                'name' => 'navyblue shotgun',
                'img' => 'navyblue+shotgun.png',
            ],
            [
                'name' => 'yellow auto gun',
                'img' => 'yellow+auto+gun.png',
            ],
        ]);
    }
}
