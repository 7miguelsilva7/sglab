<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ocupacao;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class OcupacaoController.
 *
 * @author  The scaffold-interface created at 2016-10-20 01:49:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class OcupacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $ocupacaos = Ocupacao::all();
        return view('ocupacao.index',compact('ocupacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ocupacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ocupacao = new Ocupacao();

        
        $ocupacao->nome = $request->nome;

        
        
        $ocupacao->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new ocupacao has been created !!']);

        return redirect('ocupacao');
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
            return URL::to('ocupacao/'.$id);
        }

        $ocupacao = Ocupacao::findOrfail($id);
        return view('ocupacao.show',compact('ocupacao'));
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
            return URL::to('ocupacao/'. $id . '/edit');
        }

        
        $ocupacao = Ocupacao::findOrfail($id);
        return view('ocupacao.edit',compact('ocupacao'  ));
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
        $ocupacao = Ocupacao::findOrfail($id);
    	
        $ocupacao->nome = $request->nome;
        
        
        $ocupacao->save();

        return redirect('ocupacao');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/ocupacao/'. $id . '/delete/');

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
     	$ocupacao = Ocupacao::findOrfail($id);
     	$ocupacao->delete();
        return URL::to('ocupacao');
    }
}
