<?php 

namespace App\Repositories\CinemaHall\Interfaces;

interface CinemaHallInterface {

    public function get($data);

    public function create($data);

    public function show($id);

    public function update($id, $data);

    public function delete($id);
    
}