<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:32
 */

namespace App\Repositories\Seance\Services;


use App\Models\Seance;
use App\Repositories\Seance\Interfaces\SeanceInterface;

class SeanceService implements SeanceInterface
{
    public function get($data){
        $hall = new Seance();
        $hall = $hall->paginate(20);

        return $hall;
    }

    public function create($data) {
        $hall = new Seance();
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function show($id) {
        $hall = Seance::find($id);
        return $hall;
    }

    public function update($id, $data) {
        $hall = Seance::find($id);
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function delete($id) {
        $hall = Seance::find($id);
        $hall->delete();
        return $hall;
    }
}