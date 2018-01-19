<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(\App\Models\Seat::class, function(Faker\Generator $faker) {
    return [
        'number' => $faker->numberBetween(1, 110),
        'row' => $faker->numberBetween(1, 20)
    ];
});

$factory->define(\App\Models\CinemaHall::class, function(Faker\Generator $faker) {
    return [
        'name' => 'Hall - ' . $faker->randomNumber(),
        'status' => 'active',
        'type' => $faker->randomElement(['IMAX', 'standart']),
        'numberOfSeats' => $faker->numberBetween(30, 110)
    ];
});

$factory->define(\App\Models\Movie::class, function(Faker\Generator $faker) {
    return [
        'name' => 'Movie - '. $faker->name,
        'release_date' => $faker->date(),
        'age_restriction' => $faker->randomElement(['PG', 'PG-13', 'Not rated']),
        'description' => $faker->text,
        'rating' => $faker->numberBetween(1, 10),
        'poster_url' => $faker->imageUrl()
    ];
});

$factory->define(\App\Models\Seance::class, function(Faker\Generator $faker) {
    return [
        'movieId' => factory(\App\Models\Movie::class)->create()->id,
        'datetime' => $faker->date(),
        'cinemaHallId' => factory(\App\Models\CinemaHall::class)->create()->id,
        'status' => $faker->randomElement(['ontime', 'delayed', 'cancelled'])
    ];
});

$factory->define(\App\Models\Reservation::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'paid' => $faker->randomElement([220, 250, 350]),
        'seatId' => factory(\App\Models\Seat::class)->create()->id,
        'seanceId' => factory(\App\Models\Seance::class)->create()->id
    ];
});



