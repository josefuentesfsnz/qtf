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
        $eventos = Evento::orderBy('id')->paginate(2);
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
        $v = Validator::make($request->all(), [ 
            'cantidad_max' => 'required|integer' ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        if (isset($request['all_day']) && $request['all_day'] == 'true') {
            $request['all_day'] = 1;
        }
        if (isset($request['privacidad']) && $request['privacidad'] == 'true') {
            $request['privacidad'] = 1;
        }

        // $request['cantidad_max'] = '10';
        $request['categoria_id'] = '1';
        $request['inicio'] = Carbon::now()->toDateTimeString();
        
        // dd($request->all());
        Evento::create($request->all());
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
        $evento->titulo     =$request->titulo;
        $evento->lugar      =$request->lugar;
        $evento->descripcion=$request->descripcion;
        if (isset($request['all_day']) && $request['all_day'] == 'true') {
            $evento->all_day = 1;
        }else{
            $evento->all_day = 0;
        }
        if (isset($request['privacidad']) && $request['privacidad'] == 'true') {
            $evento->privacidad = 1;
        }else{
            $evento->privacidad = 0;
        }
        $evento->cantidad_max=$request->cantidad_max;
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
