<?php
# @Date:   2020-11-07T15:42:41+00:00
# @Last modified time: 2020-11-07T17:25:51+00:00




namespace Database\Seeders;

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
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(PublisherSeeder::class);
    }
}
