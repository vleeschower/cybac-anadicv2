<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //mostrar una lista de todas las noticias almacenadas en la base de datos.
    public function index()
    {
        $news = Noticias::all();
        return view('web.noticias',compact('news'));
    }

        //mostrar una noticia específica basada en su ID.
    public function show($id)
    {
        $new = Noticias::findOrFail($id);
        return view('web.show_noticias', compact('new'));
    }
}
