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


        factory(App\User::class,1)->create();
        factory(App\Address::class,10)->create();
        factory(App\Company::class,10)->create();
        factory(App\Position::class,5)->create();
        factory(App\Application::class,4)->create();



    }
}
