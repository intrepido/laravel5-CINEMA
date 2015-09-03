<?php

namespace Cinema\Http\Controllers;

use Cinema\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class GeneroController extends Controller
{

    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route){
        $this->genre = Genre::find($route->getParameter('genero'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('genero.index');
    }

    public function listing(Request $request){
        $genres = Genre::all();
        if($request->ajax()){
            return response()->json(
                $genres->toArray()
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            Genre::create($request->all());
            return response()->json([
               'mensaje' => 'creado'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return response()->json(
           $this->genre->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->genre->fill($request->all());
        $this->genre->save();

        return response()->json(['mensaje' => 'listo']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->genre->delete();
        return response(['mensaje' => 'borrado']);
    }
}
