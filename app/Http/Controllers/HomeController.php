<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::all();
        return view('welcome', compact('adverts'));
//         return response()->json([
//             'adverts' =>$adverts
//         ]);
    }
}
