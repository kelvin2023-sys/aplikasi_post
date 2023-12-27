<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Berita;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Berita>
 */

$factory->define(Berita::class, function (Faker $faker) {
    return [
            'judul' => $faker->name,
            'deskripsi' => Str::slug($faker->name),
            'image' => $faker->imageUrl(),
        ];
});