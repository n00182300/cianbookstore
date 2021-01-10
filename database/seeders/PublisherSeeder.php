<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $publisher = new Publisher();
      $publisher->name= "Orly Media";
      $publisher->address= "Sebastopol, CA, USA";
      $publisher->save();

      $publisher = new Publisher();
      $publisher->name= "Wrox P";
      $publisher->address= "Brum, UK";
      $publisher->save();

      $publisher = new Publisher();
      $publisher->name= "New Writers";
      $publisher->address= "Bray, Ireland";
      $publisher->save();

      $publisher = new Publisher();
      $publisher->name= "Penguin";
      $publisher->address= "Manhatten, NY, USA";
      $publisher->save();
    }
}
