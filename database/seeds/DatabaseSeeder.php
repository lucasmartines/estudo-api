<?php

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
        // $this->call(UsersTableSeeder::class);
        $produtos = factory(App\Produto::class,10)->create();

        $this->call(CategoriaSeed::class);
    }
}
