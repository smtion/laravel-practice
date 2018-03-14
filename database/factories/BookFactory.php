<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'author_id' => DB::table('authors')->inRandomOrder()->value('id'),
        'name' => $faker->city,
        'publish_date' => $faker->date,
    ];
});
