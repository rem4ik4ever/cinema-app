<?php

namespace App\Repositories\CinemaHall\Services;

use App\Models\CinemaHall;
use App\Repositories\CinemaHall\Interfaces\CinemaHallInterface;

class CinemaHallService implements CinemaHallInterface {

    public function get($data){
        $hall = new CinemaHall();
        $hall = $hall->paginate(20);

        return $hall;
    }

    public function create($data) {
        $hall = new CinemaHall();
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function show($id) {
        $hall = CinemaHall::find($id);
        return $hall;
    }

    public function update($id, $data) {
        $hall = CinemaHall::find($id);
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function delete($id) {
        $hall = CinemaHall::find($id);
        $hall->delete();
        return $hall;
    }

}