<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Funcionario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;


use App\Ocupacao;


use App\Pessoa;


/**
 * Class FuncionarioController.
 *
 * @author  The scaffold-interface created at 2016-10-20 02:01:29am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.index',compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $siems = Siem::all()->pluck('escola_nome','id');
        
        $ocupacaos = Ocupacao::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('funcionario.create',compact('siems' , 'ocupacaos' , 'pessoas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();

        
        $funcionario->usuario = $request->usuario;

        
        $funcionario->vinculo = $request->vinculo;

        
        $funcionario->status_funcionario = $request->status_funcionario;

        
        
        $funcionario->siem_id = $request->siem_id;

        
        $funcionario->ocupacao_id = $request->ocupacao_id;

        
        $funcionario->pessoa_id = $request->pessoa_id;

        
        $funcionario->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new funcionario has been created !!']);

        return redirect('funcionario');
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
        if($request->ajax())
        {
            return URL::to('funcionario/'.$id);
        }

        $funcionario = Funcionario::findOrfail($id);
        return view('funcionario.show',compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('funcionario/'. $id . '/edit');
        }

        
        $siems = Siem::all()->lists('escola_nome','id');

        
        $ocupacaos = Ocupacao::all()->lists('nome','id');

        
        $pessoas = Pessoa::all()->lists('nome','id');

        
        $funcionario = Funcionario::findOrfail($id);
        return view('funcionario.edit',compact('funcionario' ,'siems', 'ocupacaos', 'pessoas' ) );
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
        $funcionario = Funcionario::findOrfail($id);
    	
        $funcionario->usuario = $request->usuario;
        
        $funcionario->vinculo = $request->vinculo;
        
        $funcionario->status_funcionario = $request->status_funcionario;
        
        
        $funcionario->siem_id = $request->siem_id;

        
        $funcionario->ocupacao_id = $request->ocupacao_id;

        
        $funcionario->pessoa_id = $request->pessoa_id;

        
        $funcionario->save();

        return redirect('funcionario');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/funcionario/'. $id . '/delete/');

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
     	$funcionario = Funcionario::findOrfail($id);
     	$funcionario->delete();
        return URL::to('funcionario');
    }
}
