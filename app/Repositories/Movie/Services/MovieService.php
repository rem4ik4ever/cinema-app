<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:08
 */

namespace App\Repositories\Movie\Services;


use App\Models\Movie;
use App\Repositories\Movie\Interfaces\MovieInterface;

class MovieService implements MovieInterface
{
    public function get($data){
        $hall = new Movie();
        $hall = $hall->paginate(20);

        return $hall;
    }

    public function create($data) {
        $hall = new Movie();
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function show($id) {
        $hall = Movie::find($id);
        return $hall;
    }

    public function update($id, $data) {
        $hall = Movie::find($id);
        $hall->fill($data);
        $hall->save();
        return $hall;
    }

    public function delete($id) {
        $hall = Movie::find($id);
        $hall->delete();
        return $hall;
    }
}