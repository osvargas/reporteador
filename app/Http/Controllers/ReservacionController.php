<?php

namespace Reporteador\Http\Controllers;

use Illuminate\Http\Request;

use Reporteador\Http\Requests;

use Reporteador\Reservaciones;

use Illuminate\Support\Facades\Redirect;
use Reporteador\Http\Requests\ReservacionFormRequest;
use DB;

class ReservacionController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		/*$reservaciones=DB::table('reservaciones')
    		->orderBy('idReserva','desc')
    		->paginate(10);*/
    		$reservaciones=DB::table('reservaciones')->where('idReserva','like','%'.$query.'%')
    		->orderBy('idReserva','desc')
    		->paginate(10);
    		return View('reservacion.index',["reservaciones"=>$reservaciones,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("reservacion.create");
    }

    public function store(ReservacionFormRequest $request)
    {
    	$reservacion=new Reservaciones;

    	$categoria->campo=$request->get('campo');
    	$categoria->save();
    	return Redirect::to('reservacion/');
    }

    public function show($idReserva)
    {
    	return view("reservacion.show",["reservacion"=>Reservaciones::findOrFail($idReserva)]);
    }

    public function edit($idReserva)
    {
    	return view("reservacion.edit",["reservacion"=>Reservaciones::findOrFail($idReserva)]);

    }

    public function update(ReservacionFormRequest $request, $idReserva)
    {
    	$reservacion=Reservaciones::findOrFail($idReserva);
    	$reservacion->campo=$request->get('campo');
    	$categoria->update();
    	return Redirect::to('reservacion/');
    }

    public function destroy($idReserva)
    {
    	$categoria=Reservaciones::findOrFail($idReserva);
    	$categoria->update();
    	return Redirect::to('reservacion/');

    }
}
