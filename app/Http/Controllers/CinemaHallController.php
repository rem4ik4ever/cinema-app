<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 14:33
 */

namespace App\Http\Controllers;



use App\Repositories\CinemaHall\Services\CinemaHallService;
use Illuminate\Http\Request;

class CinemaHallController extends Controller
{

    protected $cinemaHall;
    public function __construct(CinemaHallService $cinemaHall)
    {
        $this->cinemaHall = $cinemaHall;
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function index(Request $request) {
        try {
            $halls = $this->cinemaHall->get($request);
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
            $hall = $this->cinemaHall->show($id);
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
            $hall = $this->cinemaHall->create($request->all());
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
            $hall = $this->cinemaHall->update($id, $request->all());
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
            $hall = $this->cinemaHall->delete($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }


}