<?php
/**
 * Created by PhpStorm.
 * User: rem4i
 * Date: 19.01.2018
 * Time: 15:11
 */

namespace App\Http\Controllers;


use App\Repositories\Movie\Services\MovieService;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    protected $movie;
    public function __construct(MovieService $movie)
    {
        $this->movie = $movie;
    }

    /**
     * @param Request $request
     * @return \Exception
     */
    public function index(Request $request) {
        try {
            $halls = $this->movie->get($request);
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
            $hall = $this->movie->show($id);
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
            $hall = $this->movie->create($request->all());
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
            $hall = $this->movie->update($id, $request->all());
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
            $hall = $this->movie->delete($id);
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($hall);
    }

    public function showSeances(Request $request, $id) {
        try {
            $hall = $this->movie->show($id);
            $seances = $hall->seances()->get();
        }   catch (\Exception $ex){
            return $ex;
        }
        return response()->json($seances);
    }
}