<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name,
        'descricao' => Str::random(50),
        'preco' => rand(1,99)
    ];
});
