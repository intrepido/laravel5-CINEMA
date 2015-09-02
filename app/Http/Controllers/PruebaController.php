<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return "Hola desde controller";
    }

    public function empresa($nombre_empresa)
    {
        return "El nombre de mi empresa es: " . $nombre_empresa;
    }

}