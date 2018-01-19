<?php

use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Movie::class, 20)->create();
        factory(\App\Models\Seance::class, 12)->create();
        factory(\App\Models\Seat::class, 100)->create();
        factory(\App\Models\Reservation::class, 30)->create();
    }
}
