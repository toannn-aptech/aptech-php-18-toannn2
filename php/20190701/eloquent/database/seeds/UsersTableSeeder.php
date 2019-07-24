<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // for ($i = 0; $i < 2; $i++) {
        //     DB::table('users')->insert([
        //         'name' => str_random(10),
        //         'email' => str_random(10) . '@gmail.com',
        //         'password' => bcrypt('123'),
        //     ]);
        // }
        for ($i = 0; $i < 10; $i++) {
            $name = $faker->lastName;
            DB::table('users')->insert([
                'name' => $name,
                'email' => $name . '@gmail.com',
                'password' => bcrypt('123'),
            ]);
        }
    }
}
