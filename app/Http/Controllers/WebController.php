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
        $nosotros = Nosotros::find(1);
        return view('web.nosotros',[
            'nosotros'  =>$nosotros,
            'title'     => 'ANADIC | NOSOTROS'
        ]);
    }

    public function noticias()
    {
        return view('web.noticias',[
            'title'     => 'ANADIC | NOTICIAS'
        ]);
    }

    public function afiliados()
    {
        $afiliados = Afiliados::all();
        return view('web.afiliados', [
            'afiliados' =>$afiliados,
            'title'     => 'ANADIC | AFILIADOS'
        ]);
    }

    public function contacto()
    {
        return view('web.contacto', [
            'title'     => 'ANADIC | CONTACTO'
        ]);
    }

    public function registro()
    {
        return view('web.registro', [
            'title'     => 'ANADIC | AFILIACION'
        ]);
    }

}
