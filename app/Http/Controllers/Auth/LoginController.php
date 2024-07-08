<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //auntenticacion
    public function create(){

    }
    public function register(Request $request){
        $user = new User();

        //validacion de datos
        //todos los datos que se solicitan estan en request?
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =$request->password;

        $user->save();

        Auth::login($user);

        //las rutas estan comentadas devido por asunto del apartado de noticias, pero no existen
        return redirect(route('logout'));
    }

    //modificar la ruta de acceso con middleware controlando el accesso a la pagina
    public function login(Request $request){
        //validacion 

        $credencials =[
            "email" => $request->email,
            "password" => $request->password,
        ];

        //recordarme 
        $remember = ($request->has('remember')? true : false);

        //intento de inicio de sesion
        if(Auth::attempt($credencials,$remember)){

            //para sesiones perdidas
            $request->session()->regenerate();
            //cuando se intenta acceder a otro sitio, con la condicion que hallas hecho sesion
            return redirect()->intended(route(''));

        }else{
            return redirect('login');
        }
    }


    public function logout(Request $request){
        //cierre de sesion previo al inicio
        Auth::logout();

        //reseteo de sesion que exista 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redireccion al login 
        return redirect(route('login'));
        
    }




    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
