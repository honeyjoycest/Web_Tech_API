<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;


class MovieController extends AppBaseController
{


    /**
     * @param Movie $movie
     * @return JsonResponse
     */
    public function index(Movie $movie)
    {
        $movies = DB::table('movies')->get();

        return response()->json(['movies'=>$movies],200);
    }
}
