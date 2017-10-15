<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = Advert::orderBy('created_at', 'desc')
            ->get(['id', 'user_id', 'name', 'description', 'type', 'category_id', 'price']);
        return response()->json([
                'adverts' => $adverts,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$form =
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:3000',
            'image' => 'image',
            'category_id' => 'required',
            'price' => 'required'
        ]);
        if (!$request->hasFile('image') && !$request->file('image')->isValid()) {
            return abort(404, 'Image not uploaded.');
        }
        $filename = $this->getFileName($request->image);
        $request->image->move(base_path('public/images'), $filename);
        $advert = new Advert($request->all());
        $advert->image = $filename;
        $request->user()->adverts()->save($advert);
        return response()->json([
            'saved' => true,
            'id' => $advert->id,
            'message' => 'Your advert is published'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advert = Advert::with(['user', 'name', 'description'])
            ->findOrFail($id);
        return response()->json([
            'adverts' => $advert,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function getFileName($file)
    {
        return str_random(32) . '.' . $file->extention();
    }
}
