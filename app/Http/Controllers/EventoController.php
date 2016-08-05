<?php

namespace App\Http\Controllers;
use DB;
use App\Evento;
use App\User;
use App\Categoria;
use App\Invitacion;
use App\Contactos;
use Carbon\Carbon;

use Validator;
use Illuminate\Http\Request;
use AuthenticatesAndRegistersUsers, ThrottlesLogins;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $eventos = Evento::orderBy('id')->paginate(5);
        return view('admin.evento.index')->with('eventos', $eventos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.evento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //      'id',               
    //      'titulo',           
    //      'all_day',          
    //      'user_id',          
    //      'privacidad',       
    //      'lugar',            
    //      'cantidad_max',     
    //      'descripcion',      
    //      'categoria_id'];  


        

        $request['all_day'] = '1';//todo el dia
        $request['privacidad'] = '1';//
        $request['lugar'] = "mi casa";
        $request['cantidad_max'] = '10';
        $request['categoria_id'] = '1';
        $request['inicio'] = Carbon::now()->toDateTimeString();
        $evento = new Evento($request->all());

        dd($request->all());
        //$evento->save();

        return redirect()->route('admin.evento.index');
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
        $evento = Evento::find($id);
        return view('admin.evento.edit')->with('evento',$evento);
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
        $evento = Evento::find($id);
        $evento->titulo=$request->titulo;
        $evento->lugar=$request->lugar;
        $evento->descripcion=$request->descripcion;
        //dd($request->all());
        $evento->save();
        return redirect()->route('admin.evento.index');
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
