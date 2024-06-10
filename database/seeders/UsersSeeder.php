<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nombre'    =>'Administrador',
                'paterno'   =>'Anadic',
                'email'     =>'sistema@anadicchiapas.com.mx',
                'password'  =>bcrypt('AnadicChiapas2021')
            ]
        ]);

        DB::table('nosotros')->insert([
            'introduccion'  =>'Somos una Asociación a nivel nacional de empresas de tecnología especializadas en: distribución de cómputo, integradores de tecnología, telecomunicaciones, mayoristas de valor, expertos en robótica, consultorías, desarrolladores de software.',
            'mision'        =>'Ser la asociación que promueva el liderazgo tecnológico, empresarial y de conocimiento, generando oportunidades de negocio con representatividad nacional e internacional. Promover plataformas para el desarrollo y crecimiento de nuestros socios para mejorar y reinventar la forma de hacer negocios.',
            'vision'        =>'Representar a los distribuidores de tecnología informática y comunicaciones ANADIC MX facilitando su profesionalismo y creando oportunidades de negocio.',
            'valores'       =>' Liderazgo emprendedor
            Trabajo en equipo
            Innovación y creatividad
            Actitud de servicio
            Lealtad
            Honestidad
            Profesionalismo
            Responsabilidad',
            'imagen'        =>'', 
        ]);
    }
}
