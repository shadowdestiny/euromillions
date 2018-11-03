<?php

namespace App\Http\Controllers;

use App\EuromillionsDraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EuromillionsDrawController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getResult(Request $request){
        if (/*$request->isJson()*/ true) {

            $euromillions = Cache::remember('usersTable', 1, function() {
                return EuromillionsDraw::all()->first();
            });

            if ($euromillions){
                return response()->json($euromillions, 201);
            } else {
                return response()->json(['error' => 'User found'], 401, []);
            }

        } else {
            return response()->json(['error' => 'Unauthorized'], 401, []);
        }
    }
}
