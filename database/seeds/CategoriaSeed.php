<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome'=>'Categoria X',
            'slug'=>'categoria_x'
        ]);

        Categoria::create([
            'nome'=>'Categoria Y',
            'slug'=>'categoria_y'
        ]);

        Categoria::create([
            'nome'=>'Categoria Z',
            'slug'=>'categoria_z'
        ]);
        
    }
}
