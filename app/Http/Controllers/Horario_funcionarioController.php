<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Horario_funcionario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;


use App\Pessoa;


/**
 * Class Horario_funcionarioController.
 *
 * @author  The scaffold-interface created at 2016-12-05 01:31:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Horario_funcionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - horario_funcionario';
        $horario_funcionarios = Horario_funcionario::paginate(6);
        return view('horario_funcionario.index',compact('horario_funcionarios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - horario_funcionario';
        
        $siems = Siem::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('horario_funcionario.create',compact('title','siems' , 'pessoas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario_funcionario = new Horario_funcionario();

        
        $horario_funcionario->dias = $request->dias;

        
        $horario_funcionario->turno = $request->turno;

        
        $horario_funcionario->horario_m = $request->horario_m;

        
        $horario_funcionario->horario_t = $request->horario_t;

        
        $horario_funcionario->horario_n = $request->horario_n;

        
        $horario_funcionario->horario_c = $request->horario_c;

        
        
        $horario_funcionario->siem_id = $request->siem_id;

        
        $horario_funcionario->pessoa_id = $request->pessoa_id;

        
        $horario_funcionario->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new horario_funcionario has been created !!']);

        return redirect('horario_funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - horario_funcionario';

        if($request->ajax())
        {
            return URL::to('horario_funcionario/'.$id);
        }

        $horario_funcionario = Horario_funcionario::findOrfail($id);
        return view('horario_funcionario.show',compact('title','horario_funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - horario_funcionario';
        if($request->ajax())
        {
            return URL::to('horario_funcionario/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $horario_funcionario = Horario_funcionario::findOrfail($id);
        return view('horario_funcionario.edit',compact('title','horario_funcionario' ,'siems', 'pessoas' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $horario_funcionario = Horario_funcionario::findOrfail($id);
    	
        $horario_funcionario->dias = $request->dias;
        
        $horario_funcionario->turno = $request->turno;
        
        $horario_funcionario->horario_m = $request->horario_m;
        
        $horario_funcionario->horario_t = $request->horario_t;
        
        $horario_funcionario->horario_n = $request->horario_n;
        
        $horario_funcionario->horario_c = $request->horario_c;
        
        
        $horario_funcionario->siem_id = $request->siem_id;

        
        $horario_funcionario->pessoa_id = $request->pessoa_id;

        
        $horario_funcionario->save();

        return redirect('horario_funcionario');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/horario_funcionario/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$horario_funcionario = Horario_funcionario::findOrfail($id);
     	$horario_funcionario->delete();
        return URL::to('horario_funcionario');
    }
}
