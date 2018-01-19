<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:34
 */

namespace App\Repositories\Seance\Interfaces;

interface SeanceInterface
{
    public function get($data);

    public function create($data);

    public function show($id);

    public function update($id, $data);

    public function delete($id);
}