<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:49
 */

namespace App\Repositories\Reservation\Services;


use App\Models\Reservation;
use App\Repositories\Reservation\Interfaces\ReservationInterface;

class ReservationService implements ReservationInterface
{
    public function get($data){
        $hall = new Reservation();
        $hall = $hall->paginate(20);

        return $hall;
    }

    public function create($data) {
        $hall = new Reservation();
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function show($id) {
        $hall = Reservation::find($id);
        return $hall;
    }

    public function update($id, $data) {
        $hall = Reservation::find($id);
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function delete($id) {
        $hall = Reservation::find($id);
        $hall->delete();
        return $hall;
    }
}