<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function postEmail(Request $request)
      {

        $nombre = $request->input('name');
        $empresa = $request->input('empresa');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $producto = $request->input('producto');
        $mensaje = $request->input('message');

        $data = [
          'nombre' => $nombre,
          'empresa' => $empresa,
          'email' => $email,
          'telefono' => $subject,
          'producto' => $producto,
          'mensaje' => $mensaje
        ];

          Mail::send('email', $data, function ($message) {
              //$message->from('contactoweb@sitwifi.com', 'ContactoSitwifiWeb');
              $message->to('rgonzalez@sitwifi.com', 'Rene')->subject('Contacto SitWifi Web');

          });

          return "OK";
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
