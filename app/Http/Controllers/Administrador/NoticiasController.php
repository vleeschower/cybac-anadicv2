<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function index()
    {
        //
        $news = Noticias::all();
        return view('web.noticias',compact('news'));
    }
}
