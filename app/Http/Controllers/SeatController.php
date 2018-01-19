<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:27
 */

namespace App\Http\Controllers;


use App\Repositories\Seat\Services\SeatService;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    protected $seat;
    public function __construct(SeatService $seat)
    {
        $this->seat = $seat;
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function index(Request $request) {
        try {
            $halls = $this->seat->get($request);
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
            $hall = $this->seat->show($id);
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
            $hall = $this->seat->create($request->all());
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
            $hall = $this->seat->update($id, $request->all());
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
            $hall = $this->seat->delete($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }
}