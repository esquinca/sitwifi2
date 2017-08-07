<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

<<<<<<< HEAD
use DB;

=======
>>>>>>> master
use Mail;

define("ZDURL", "https://sitwifi.zendesk.com/api/v2/tickets.json");

class FormularioController extends Controller
{
<<<<<<< HEAD
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postForm(Request $request)
    {
      	$name = $request->input('name');
=======

    public function postForm(Request $request)
    {
    	$name = $request->input('name');
>>>>>>> master
        $email = $request->input('email');
        $subject = $request->input('asunto');
        $mensaje = $request->input('message');

        $create = json_encode(array('ticket' => array('subject' => $subject, 'comment' => array( "value"=> $mensaje), 'requester' => array('name' => $name, 'email' => $email))));

        $ch = curl_init();
<<<<<<< HEAD
	      //echo "Inicializa la funcion .. ";
	      curl_setopt($ch, CURLOPT_TIMEOUT, 50);
	      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false );
	      curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
	      curl_setopt($ch, CURLOPT_URL, ZDURL);
	      curl_setopt($ch, CURLOPT_USERPWD, "jesquinca@sitwifi.com/token:f4qs3fDR9b9J635IcP6Ce5cGXxKx32ewexk3qmvz");
	      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	      curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	      curl_setopt($ch, CURLOPT_POSTFIELDS, $create);
	      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	      //echo ".. Termina la funcion ..";

	      $output = curl_exec($ch);
	      $curlerrno = curl_errno($ch);
	      if ($curlerrno != 0) {
	          echo "MAl";
	      }else{
	          echo "OK";
	      }
	      curl_close($ch);

	}
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
      //
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
=======
	    //echo "Inicializa la funcion .. ";
	    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false );
	    curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
	    curl_setopt($ch, CURLOPT_URL, ZDURL);
	    curl_setopt($ch, CURLOPT_USERPWD, "jesquinca@sitwifi.com/token:f4qs3fDR9b9J635IcP6Ce5cGXxKx32ewexk3qmvz");
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $create);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	    //echo ".. Termina la funcion ..";

	    $output = curl_exec($ch);
	    $curlerrno = curl_errno($ch);
	    if ($curlerrno != 0) {
	        echo "MAl";
	    }else{
	        echo "OK";
	    }
	    curl_close($ch);

	}

>>>>>>> master
}
