<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use App\Models\Nosotros;
use App\Models\Afiliados;
use Illuminate\Http\Request;
use App\Mail\RegistroMailable;
use Exception;
use Spatie\Newsletter\Newsletter;
use Illuminate\Support\Facades\Mail;

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

    public function registro2(Request $request)
    {
        try {
            Mail::to('vleeschowerrr22@gmail.com')->send(new RegistroMailable($request->all()));
            return back()->with('info', '¡Formulario enviado con éxito!');
        } catch (Exception $e) {
            return back()->with('error2', 'Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.');
        }
    }

    public function administrador()
    {
        return view('auth.login');
    }

    protected $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function subscribe(Request $request)
    {
        $user_email = $request->input('subscribe_email');

        try {
            if (!$this->newsletter->isSubscribed($user_email)) {
                $this->newsletter->subscribePending($user_email);
                return back()->with('info', 'Revisa tu email para confirmar tu suscripción');
            } else {
                return back()->with('info2', '¡Ya estás suscrito!');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Hubo un problema al procesar tu suscripción. Por favor, inténtalo de nuevo más tarde.');
        }
    }
}
