<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:35
 */

namespace App\Http\Controllers;


use App\Repositories\Seance\Services\SeanceService;
use Illuminate\Http\Request;

class SeanceController
{
    protected $seance;
    public function __construct(SeanceService $seance)
    {
        $this->seance = $seance;
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function index(Request $request) {
        try {
            $halls = $this->seance->get($request);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($halls);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Exception
     */
    public function show(Request $request, $id) {
        try {
            $hall = $this->seance->show($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function create(Request $request) {
        try {
            $hall = $this->seance->create($request->all());
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Exception
     */
    public function update(Request $request, $id) {
        try {
            $hall = $this->seance->update($id, $request->all());
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Exception
     */
    public function destroy(Request $request, $id) {
        try {
            $hall = $this->seance->delete($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }

    public function showMovie(Request $request, $id){
        try {
            $hall = $this->seance->show($id);
            $movie = $hall->movie()->first();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($movie);
    }

    public function showCinemaHall(Request $request, $id){
        try {
            $hall = $this->seance->show($id);
            $movie = $hall->cinemaHall()->first();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($movie);
    }

    public function showReservations(Request $request, $id){
        try {
            $seance = $this->seance->show($id);
            $reservations = $seance->reservations()->get();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($reservations);
    }
}