<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:51
 */

namespace App\Http\Controllers;


use App\Repositories\Reservation\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    protected $reservation;
    public function __construct(ReservationService $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function index(Request $request) {
        try {
            $halls = $this->reservation->get($request);
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
            $hall = $this->reservation->show($id);
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
            $hall = $this->reservation->create($request->all());
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
            $hall = $this->reservation->update($id, $request->all());
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
            $hall = $this->reservation->delete($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }


    public function showSeat(Request $request, $id){
        try {
            $hall = $this->reservation->show($id);
            $seat = $hall->seat()->first();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($seat);
    }

    public function showSeance(Request $request, $id){
        try {
            $hall = $this->reservation->show($id);
            $seance = $hall->seance()->first();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($seance);
    }
}