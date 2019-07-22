<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //factory(App\User::class, 50)->create();
      //factory(App\Brand::class, 50)->create();
      factory(App\Product::class, 200)->create();
    }
}
