<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Sponsor;

$factory->define(Sponsor::class, function (Faker $faker) {
    return [
      'title' => '',
      'price' => '',
      'hours' => ''
    ];
});
