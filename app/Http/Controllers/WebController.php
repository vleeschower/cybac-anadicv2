<?php

namespace App\Http\Controllers;

use App\Models\Afiliados;
use App\Models\Nosotros;
use App\Models\Sliders;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $slider = Sliders::all();
        $afiliados = Afiliados::all();
        $nosotros = Nosotros::find(1);
        return view('index',[
            'slider'    =>$slider,
            'afiliados' =>$afiliados,
            'nosotros'  =>$nosotros
        ]);
    }

    public function quienes_somos()
    {
        return view('web.nosotros');
    }

    public function noticias()
    {
        return view('web.noticias');
    }

    public function afiliados()
    {
        return view('web.afiliados');
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function registro()
    {
        return view('web.registro');
    }

    public function prueba()
    {
        return view('web.prueba');
    }

}
