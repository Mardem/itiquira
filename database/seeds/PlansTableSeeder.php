<?php

use App\Models\Hotpark\Plan;
use App\Models\Hotpark\Product;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Plan::class, 10)->each(function($plan) {
            $plan->products->save(factory(Product::class)->make());
        })->create();
    }
}
