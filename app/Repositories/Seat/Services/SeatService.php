<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:23
 */

namespace App\Repositories\Seat\Services;


use App\Models\Seat;
use App\Repositories\Seat\Interfaces\SeatInterface;

class SeatService implements SeatInterface
{
    public function get($data){
        $hall = new Seat();
        $hall = $hall->paginate(20);

        return $hall;
    }

    public function create($data) {
        $hall = new Seat();
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function show($id) {
        $hall = Seat::find($id);
        return $hall;
    }

    public function update($id, $data) {
        $hall = Seat::find($id);
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function delete($id) {
        $hall = Seat::find($id);
        $hall->delete();
        return $hall;
    }
}